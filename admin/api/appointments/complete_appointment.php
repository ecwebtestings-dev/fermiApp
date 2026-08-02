<?php
// Always calculate absolute path from project root
$root = realpath(__DIR__ . '/../../../'); // 3 levels up from appointments/
require_once $root . '/auth/db.php';
require_once $root . '/auth/auth.php';

header("Content-Type: application/json");
$id = $_POST['id'] ?? null;
if(!$id){ http_response_code(400); exit; }
$stmt = $connected->prepare("UPDATE appointments SET status=1 WHERE id=?");
$stmt->bind_param("i",$id);
$stmt->execute();
echo $stmt->affected_rows>0?"success":"failed";
$stmt->close();