<?php
error_reporting(0);
ini_set('display_errors', 0);

session_start();
require __DIR__ . "/../auth/db.php";
require __DIR__ . "/../auth/auth.php";

header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(["status" => "error", "message" => "Method not allowed"]);
    exit;
}

$username = trim($_POST['username'] ?? '');
$email    = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';

if (empty($username) || empty($email) || empty($password)) {
    http_response_code(400);
    echo json_encode(["status" => "error",
     "message" => "All fields required"
     ]);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(["status" => "error",
     "message" => "Invalid email"
     ]);
    exit;
}

if (strlen($password) < 6) {
    http_response_code(400);
    echo json_encode(
        [
        "status" => "error",
     "message" => "Password must be at least 6 characters"
     ]);
    exit;
}

$check = $connected->prepare("SELECT id FROM users WHERE email=?");
$check->bind_param("s", $email);
$check->execute();
$check->store_result();

if ($check->num_rows > 0) {
    http_response_code(409);
    echo json_encode(
        ["status" => "error", 
    "message" => "Email already exists"
    ]);
    exit;
}
$check->close();

$role = "user";
$adminEmails = ["aredoivan9@gmail.com",
 "joel@gmail.com"];

if (in_array(strtolower($email), $adminEmails)) {
    $role = "admin";
}

$hashed = password_hash($password, PASSWORD_DEFAULT);

$stmt = $connected->prepare("INSERT INTO users(username,email,password,role) VALUES(?,?,?,?)");
$stmt->bind_param("ssss", $username, $email, $hashed, $role);

if ($stmt->execute()) {

    logAction($stmt->insert_id, "SIGN UP ($role)");

    http_response_code(201);
    echo json_encode([
        "status" => "success",
        "message" => "Account created successfully"
    ]);

} else {

    http_response_code(500);
    echo json_encode(["status" => "error",
     "message" => "Server error"]);
}

$stmt->close();
$connected->close();
