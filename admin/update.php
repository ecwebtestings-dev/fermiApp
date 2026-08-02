<?php
session_start();
require __DIR__ . "/../auth/db.php";
require __DIR__ . "/../auth/auth.php";

header("Content-Type: application/json");

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

$user_id  = (int)($_POST['user_id'] ?? 0);
$username = trim($_POST['username'] ?? '');
$email    = trim($_POST['email'] ?? '');
$role     = trim($_POST['role'] ?? '');

if ($user_id <= 0 || $username === '' || $email === '' || $role === '') {
    http_response_code(400);
    echo json_encode([
        "status" => "error",
        "message" => "All fields required"
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

/*
|--------------------------------------------------------------------------
| Update user
|--------------------------------------------------------------------------
*/
$stmt = $connected->prepare(
    "UPDATE users 
     SET username = ?, email = ?, role = ?
     WHERE id = ?"
);

$stmt->bind_param("sssi", $username, $email, $role, $user_id);

if ($stmt->execute()) {

    logAction($_SESSION['user_id'], "UPDATED USER ID={$user_id}");

    http_response_code(200);
    echo json_encode([
        "status" => "success",
        "message" => "User updated successfully"
    ]);
} else {
    http_response_code(500);
    echo json_encode([
        "status" => "error",
        "message" => "Update failed"
    ]);
}

$stmt->close();
$connected->close();