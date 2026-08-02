<?php
session_start();
require_once __DIR__ . "/../auth/db.php";
require_once __DIR__ . "/../auth/auth.php";

header("Content-Type: application/json");

// Prevent accidental output
ob_clean();

if (!isset($_SESSION['id'])) {
    echo json_encode([
        "status" => "error",
        "message" => "Unauthorized"
    ]);
    exit;
}

$user_id = $_SESSION['id'];

$service_type    = trim($_POST['service_type'] ?? '');
$preferred_date  = trim($_POST['preferred_date'] ?? '');
$contact         = trim($_POST['contact'] ?? '');
$service_address = trim($_POST['service_address'] ?? '');

if (!$service_type || !$preferred_date || !$contact || !$service_address) {
    echo json_encode([
        "status" => "error",
        "message" => "All fields are required"
    ]);
    exit;
}

if ($preferred_date < date('Y-m-d')) {
    echo json_encode([
        "status" => "error",
        "message" => "You cannot select a past date"
    ]);
    exit;
}

// number
if (strlen($contact)  > 10||strlen($contact) < 10) {
    echo json_encode([
        "status" => "error",
        "message" => "Enter a valid phone number"
    ]);
    exit;
}


$stmt = $connected->prepare("
    INSERT INTO appointments 
    (user_id, service_type, preferred_date, contact, service_address)
    VALUES (?, ?, ?, ?, ?)
");

$stmt->bind_param("issss", $user_id, $service_type, $preferred_date, $contact, $service_address);

if ($stmt->execute()) {

    $action = "Appointment created:$service_type";
    logAction($user_id, $action);

    echo json_encode([
        "status" => "success",
        "message" => "Scheduled successfully"
    ]);

} else {

    echo json_encode([
        "status" => "error",
        "message" => "Failed to schedule appointment"
    ]);
}

$stmt->close();
exit;
