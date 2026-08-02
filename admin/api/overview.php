<?php
// admin/api/overview.php
require_once __DIR__ . '/../../auth/db.php';
require_once __DIR__ . '/../../auth/auth.php';

header("Content-Type: application/json");

// Active users
$activeUsersResult = mysqli_query($connected, "SELECT COUNT(*) AS active_users FROM users WHERE status=0");
$activeUsersRow = mysqli_fetch_assoc($activeUsersResult);

// Completed appointments
$completedResult = mysqli_query($connected, "SELECT COUNT(*) AS completed_appointments FROM appointments WHERE status=1");
$completedRow = mysqli_fetch_assoc($completedResult);

// Pending appointments
$pendingResult = mysqli_query($connected, "SELECT COUNT(*) AS pending_appointments FROM appointments WHERE status=0");
$pendingRow = mysqli_fetch_assoc($pendingResult);

echo json_encode([
    "status" => "success",
    "data" => [
        "active_users" => (int)$activeUsersRow['active_users'],
        "completed_appointments" => (int)$completedRow['completed_appointments'],
        "pending_appointments" => (int)$pendingRow['pending_appointments']
    ]
]);