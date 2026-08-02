<?php
require_once __DIR__ . "/../auth/db.php";
require_once __DIR__ . "/../auth/auth.php";

header("Content-Type: application/json");

$query = "
SELECT 
    u.username,
    a.service_type AS service,
    a.preferred_date AS date,
    a.contact,
    a.service_address AS address
FROM users u
INNER JOIN appointments a 
    ON a.user_id = u.id
WHERE a.status = 1
ORDER BY a.created_at DESC
";

$result = mysqli_query($connected, $query);

if (!$result) {
    http_response_code(500);
    echo json_encode([
        "status" => "error",
        "message" => "Failed to load completed appointments"
    ]);
    exit;
}

$data = [];

while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

mysqli_free_result($result);

http_response_code(200);
echo json_encode([
    "status" => "success",
    "count"  => count($data),
    "data"   => $data
]);