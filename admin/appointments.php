<?php
require __DIR__ . "/../auth/db.php";
require __DIR__ . "/../auth/auth.php";

$query = mysqli_query($connected,"
SELECT a.id, u.username, a.service_type, 
a.preferred_date, a.status
FROM appointments a
JOIN users u ON u.id = a.user_id
ORDER BY a.id DESC
");

$data = [];
while($row = mysqli_fetch_assoc($query)){
    $data[] = $row;
}

echo json_encode([
    "status"=>"success",
    "data"=>$data
]);