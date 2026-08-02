<?php
session_start();
require __DIR__ . "/../auth/db.php";
require __DIR__ . "/../auth/auth.php";

header("Content-Type: application/json");

/*
|--------------------------------------------------------------------------
| Allow ONLY admins
|--------------------------------------------------------------------------
*/
if ($_SESSION['role'] !== 'admin') {
    http_response_code(403);
    echo json_encode([
        "status" => "error",
        "message" => "Forbidden"
    ]);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode([
        "status" => "error",
        "message" => "Method not allowed"
    ]);
    exit;
}

$username = trim($_POST['username'] ?? '');
$email    = trim($_POST['email'] ?? '');
$role     = trim($_POST['role'] ?? '');
$password = $_POST['password'] ?? '';

if ($username === '' || $email === '' || $password === '' || $role === '') {
    http_response_code(400);
    echo json_encode([
        "status" => "error",
        "message" => "All fields are required"
    ]);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode([
        "status" => "error",
        "message" => "Invalid email"
    ]);
    exit;
}

if (!in_array($role, ['admin', 'user'], true)) {
    http_response_code(400);
    echo json_encode([
        "status" => "error",
        "message" => "Invalid role"
    ]);
    exit;
}

if (strlen($password) < 6) {
    http_response_code(400);
    echo json_encode([
        "status" => "error",
        "message" => "Password must be at least 6 characters"
    ]);
    exit;
}

/*
|--------------------------------------------------------------------------
| Check email uniqueness
|--------------------------------------------------------------------------
*/
$check = $connected->prepare("SELECT id FROM users WHERE email = ?");
$check->bind_param("s", $email);
$check->execute();
$check->store_result();

if ($check->num_rows > 0) {
    http_response_code(409);
    echo json_encode([
        "status" => "error",
        "message" => "Email already exists"
    ]);
    exit;
}
$check->close();

/*
|--------------------------------------------------------------------------
| Create user
|--------------------------------------------------------------------------
*/
$hashed = password_hash($password, PASSWORD_DEFAULT);

$stmt = $connected->prepare(
    "INSERT INTO users (username, email, password, role) VALUES (?, ?, ?, ?)"
);
$stmt->bind_param("ssss", $username, $email, $hashed, $role);

if ($stmt->execute()) {

    logAction($_SESSION['user_id'], "CREATED USER ({$email}) ROLE={$role}");

    http_response_code(201);
    echo json_encode([
        "status" => "success",
        "message" => "User created successfully"
    ]);
} else {
    http_response_code(500);
    echo json_encode([
        "status" => "error",
        "message" => "Server error"
    ]);
}

$stmt->close();
$connected->close();