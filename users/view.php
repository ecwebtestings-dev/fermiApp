<?php
require __DIR__ . "/../auth/db.php";
require __DIR__ . "/../auth/auth.php";

header("Content-Type: application/json");

/*
|--------------------------------------------------------------------------
| Validate Pagination Params
|--------------------------------------------------------------------------
*/

$page  = isset($_GET['page'])  ? (int)$_GET['page']  : 1;
$limit = isset($_GET['limit']) ? (int)$_GET['limit'] : 10;

if ($page < 1)  $page = 1;
if ($limit < 1) $limit = 10;
if ($limit > 100) $limit = 100; // prevent abuse

$offset = ($page - 1) * $limit;

/*
|--------------------------------------------------------------------------
| Get Total Count
|--------------------------------------------------------------------------
*/

$countQuery = "SELECT COUNT(*) AS total FROM users WHERE status = 0";
$countResult = mysqli_query($connected, $countQuery);

if (!$countResult) {
    http_response_code(500);
    echo json_encode([
        "status" => "error",
        "message" => "Failed to fetch user count"
    ]);
    exit;
}

$totalData = mysqli_fetch_assoc($countResult);
$totalUsers = (int)$totalData['total'];
mysqli_free_result($countResult);

$totalPages = ceil($totalUsers / $limit);

/*
|--------------------------------------------------------------------------
| Fetch Paginated Data
|--------------------------------------------------------------------------
*/

$dataQuery = "
SELECT id, username, email, role
FROM users
WHERE status = 0
ORDER BY id DESC
LIMIT $limit OFFSET $offset
";

$result = mysqli_query($connected, $dataQuery);

if (!$result) {
    http_response_code(500);
    echo json_encode([
        "status" => "error",
        "message" => "Failed to fetch users"
    ]);
    exit;
}

$users = [];

while ($row = mysqli_fetch_assoc($result)) {
    $users[] = $row;
}

mysqli_free_result($result);

/*
|--------------------------------------------------------------------------
| Response
|--------------------------------------------------------------------------
*/

http_response_code(200);

echo json_encode([
    "status" => "success",
    "meta" => [
        "current_page" => $page,
        "per_page"     => $limit,
        "total_users"  => $totalUsers,
        "total_pages"  => $totalPages,
        "has_next"     => $page < $totalPages,
        "has_prev"     => $page > 1
    ],
    "data" => $users
]);