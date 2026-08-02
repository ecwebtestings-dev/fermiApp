<?php
require __DIR__ . "/../auth/db.php";
require __DIR__ . "/../auth/auth.php";

header("Content-Type: application/json");

$query = "
SELECT 
    COUNT(CASE WHEN status = 0 THEN 1 END) AS active_users,
    COUNT(CASE WHEN status = 1 THEN 1 END) AS inactive_users,
    COUNT(*) AS total_users
FROM users
";

$result = mysqli_query($connected, $query);

if (!$result) {
    http_response_code(500);
    echo json_encode([
        "status" => "error",
        "message" => "Failed to fetch user statistics"
    ]);
    exit;
}

$data = mysqli_fetch_assoc($result);

mysqli_free_result($result);

http_response_code(200);
echo json_encode([
    "status" => "success",
    "data" => [
        "active_users"   => (int)$data["active_users"],
        "inactive_users" => (int)$data["inactive_users"],
        "total_users"    => (int)$data["total_users"]
    ]
]);