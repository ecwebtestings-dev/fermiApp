<?php
require __DIR__ . "/../auth/db.php";
require __DIR__ . "/../auth/auth.php";

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$limit = 10;
$offset = ($page - 1) * $limit;

$totalQuery = mysqli_query($connected, "SELECT COUNT(*) as total FROM users WHERE status=0");
$totalData = mysqli_fetch_assoc($totalQuery);
$totalUsers = $totalData['total'];

$query = mysqli_query($connected, "
    SELECT id, username, email, role 
    FROM users
    WHERE status=0
    ORDER BY id DESC
    LIMIT $limit OFFSET $offset
");

$users = [];
while($row = mysqli_fetch_assoc($query)){
    $users[] = $row;
}

echo json_encode([
    "status" => "success",
    "data" => $users,
    "pagination" => [
        "current_page" => $page,
        "total_pages" => ceil($totalUsers / $limit),
        "has_next" => $page < ceil($totalUsers / $limit),
        "has_prev" => $page > 1
    ]
]);