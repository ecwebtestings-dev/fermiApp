<?php
require_once "../../auth/db.php";
require_once "../../auth/auth.php";

header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(["status" => "error", 
    "message" => "Invalid request"]);
    exit;
}

$id = isset($_POST['id']) ? (int)$_POST['id'] : 0;

if ($id <= 0) {
    http_response_code(400);
    echo json_encode(["status" => "error", 
    "message" => "Invalid ID"]);
    exit;
}

/* Toggle status */
$stmt = $connected->prepare("UPDATE users SET status = IF(status=0,1,0) WHERE id=?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    echo json_encode([
        "status" => "success"
        ]);
} else {
    http_response_code(500);
    echo json_encode(["status" => "error"]);
}

$stmt->close();