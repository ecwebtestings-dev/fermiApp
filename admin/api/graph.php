<?php
// admin/api/graph.php
require_once __DIR__ . '/../../auth/db.php';
require_once __DIR__ . '/../../auth/auth.php';

header("Content-Type: application/json");

// Monthly totals
$query = "
SELECT DATE_FORMAT(preferred_date, '%b %Y') AS month,
COUNT(*) AS total
FROM appointments
GROUP BY YEAR(preferred_date), MONTH(preferred_date)
ORDER BY YEAR(preferred_date), MONTH(preferred_date)
";
$result = mysqli_query($connected, $query);

$data = [];
while($row = mysqli_fetch_assoc($result)){
    $data[] = [
        "month" => $row['month'],
        "total" => (int)$row['total']
    ];
}

echo json_encode([
    "status" => "success",
    "data" => $data
]);