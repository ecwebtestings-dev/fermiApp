<?php
session_start();
header("Content-Type: application/json");

// Load .env
function loadEnv($path) {
    if (!file_exists($path)) return;
    foreach (file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
        if (str_starts_with(trim($line), '#')) continue;
        [$key, $value] = explode('=', $line, 2);
        putenv(trim($key) . '=' . trim($value));
    }
}
loadEnv(__DIR__ . '/.env');

$apiKey = getenv('GROQ_API_KEY');
$model  = "llama-3.1-8b-instant";

// SYSTEM PERSONA
$systemPersona = [
    "role"=>"system",
    "content"=>"
You are FERMI AI, official assistant for FERMI Electrical, Security & IT Solutions.

Rules:
- Answer naturally, professionally, and concisely.
- Always answer FERMI-related questions: services, installation, troubleshooting.
- Limit answers to 30 words or fewer.
- NEVER return JSON, confidence, or labels.
- If user asks pricing, emergencies, or onsite help, suggest contacting FERMI with contact info.
- If user asks unrelated topics, politely redirect to FERMI services.

FERMI Services:
- CCTV Installation
- Access Control Installation
- Intercom Systems
- Automatic Gates
- Motion Detection Sensors
- Alarm Systems Installation
- POS System Installation
- GPS Tracking Installation
- WAN/LAN Setup, Repair & Monitoring

Escalation Contact:
Phone: 0754 130885
Email: fermielectritech@gmail.com
WhatsApp: 0701705888
"
];

// INIT SESSION MEMORY
if(!isset($_SESSION["chat"])) {
    $_SESSION["chat"] = [];
    $_SESSION["chat"][] = $systemPersona;
}

// --- RATE LIMIT: max 10 messages per rolling 60s window, per session ---
if(!isset($_SESSION["chat_count"])) $_SESSION["chat_count"] = 0;
if(!isset($_SESSION["chat_reset"]))  $_SESSION["chat_reset"] = time();

if(time() - $_SESSION["chat_reset"] > 60) {
    $_SESSION["chat_count"] = 0;
    $_SESSION["chat_reset"] = time();
}
if($_SESSION["chat_count"] >= 10) {
    echo json_encode(["reply"=>"You're sending messages a bit fast — give it a moment and try again."]);
    exit;
}
$_SESSION["chat_count"]++;

// GET INPUT (capped length to bound token usage per request)
$input = json_decode(file_get_contents("php://input"), true);
$userText = substr(trim($input["prompt"] ?? ""), 0, 500);

if($userText==="") {
    echo json_encode(["reply"=>"Please ask a question about FERMI services."]);
    exit;
}

// ESCALATION CHECK
$escalationKeywords = ["price","cost","quotation","install","installation","visit","come","emergency","repair","fix"];
$escalation = false;
foreach($escalationKeywords as $k) {
    if(stripos($userText,$k)!==false) { $escalation=true; break; }
}

// ADD USER MESSAGE
$_SESSION["chat"][] = ["role"=>"user","content"=>$userText];

// CALL AI
$payload = ["model"=>$model,"messages"=>$_SESSION["chat"],"temperature"=>0.7];
$ch = curl_init("https://api.groq.com/openai/v1/chat/completions");
curl_setopt_array($ch,[
    CURLOPT_RETURNTRANSFER=>true,
    CURLOPT_POST=>true,
    CURLOPT_TIMEOUT=>15,
    CURLOPT_CONNECTTIMEOUT=>5,
    CURLOPT_HTTPHEADER=>[
        "Content-Type: application/json",
        "Authorization: Bearer $apiKey"
    ],
    CURLOPT_POSTFIELDS=>json_encode($payload)
]);
$response = curl_exec($ch);
$curlFailed = ($response === false);
curl_close($ch);

if($curlFailed) {
    echo json_encode(["reply"=>"Sorry, I'm having trouble responding right now — please try again shortly."]);
    exit;
}

$data = json_decode($response,true);
$reply = $data["choices"][0]["message"]["content"] ?? "";

// HARD GUARD: STRIP JSON
if(preg_match('/^\s*[{[]/',$reply)) {
    $reply = "FERMI Electrical & IT Solutions Company
     offers professional electrical, security, and IT services. How can I assist you today?";
}

// ADD AI REPLY TO MEMORY
$_SESSION["chat"][] = ["role"=>"assistant","content"=>$reply];

// TRIM HISTORY: keep system persona + last 12 exchanged messages
if(count($_SESSION["chat"]) > 13) {
    $_SESSION["chat"] = array_merge([$systemPersona], array_slice($_SESSION["chat"], -12));
}

// RETURN
echo json_encode(["reply"=>$reply,"escalation"=>$escalation]);