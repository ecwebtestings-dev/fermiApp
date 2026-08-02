<?php
session_start();
require __DIR__ . "/../auth/db.php";
require __DIR__ . "/../auth/auth.php";

header("Content-Type: application/json");

// Only POST allowed
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(["status"=>"error","message"=>"Method not allowed"]);
    exit;
}

// Get POST data
$phone = trim($_POST['phone'] ?? '');
$date= trim($_POST['date_date'] ?? '');

$result1=mysqli_query($connected,
"SELECT id,username FROM users"
);

$user=mysqli_fetch_assoc($result1);
 $_SESSION['id'] = $user['id'];



if (empty($username) || empty($email) || empty($password)) {
    http_response_code(400);
    echo json_encode(["status"=>"error","message"=>"All fields required"]);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(["status"=>"error","message"=>"Invalid email"]);
    exit;
}

if (strlen($password) < 6) {
    http_response_code(400);
    echo json_encode(["status"=>"error","message"=>"Password must be at least 6 characters"]);
    exit;
}

// Check if email exists
$check = $connected->prepare("SELECT id FROM users WHERE email=?");
$check->bind_param("s",$email);
$check->execute();
$check->store_result();

if ($check->num_rows > 0) {
    http_response_code(409);
    echo json_encode(["status"=>"error","message"=>"Email already exists"]);
    exit;
}
$check->close();

// Determine role
$role = "user";
$adminEmails = ["aredoivan9@gmail.com","joel@gmail.com"];
if (in_array(strtolower($email), $adminEmails)) $role = "admin";

// Hash password
$hashed = password_hash($password, PASSWORD_DEFAULT);

// Insert user
$stmt = $connected->prepare("INSERT INTO users(username,email,password,role,created_at,last_login) VALUES(?,?,?,?,NOW(),NOW())");
$stmt->bind_param("ssss", $username, $email, $hashed, $role);

if ($stmt->execute()) {
    $user_id = $stmt->insert_id;
    logAction($connected, $user_id, "SIGN UP ($role)");
    $_SESSION['id'] = $user_id;
    $_SESSION['username'] = $username;
    $_SESSION['role'] = $role;

    echo json_encode(["status"=>"success","message"=>"Account created successfully"]);
} else {
    http_response_code(500);
    echo json_encode(["status"=>"error","message"=>"Server error"]);
}

$stmt->close();
$connected->close();
?>
