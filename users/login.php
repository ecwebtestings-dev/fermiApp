<?php
session_start();
error_reporting(0);
ini_set('display_errors', 0);




require __DIR__ . "/../auth/db.php";
require __DIR__ . "/../auth/auth.php";

header("Content-Type: application/json");

// Only POST allowed
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode([
        "status" => "error",
        "message" => "Method not allowed"
    ]);
    exit;
}

$email = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';

if (empty($email) || empty($password)) {
    http_response_code(400);
    echo json_encode([
        "status" => "error",
        "message" => "All fields required"
    ]);
    exit;
}

$result4=mysqli_query($connected,
"SELECT * FROM users WHERE email='$email'
AND status=1;
"
);

if (mysqli_num_rows($result4)) {
    # code...
     http_response_code(400);
    echo json_encode([
        "status" => "error",
        "message" => "Access denied "
    ]);
    exit;
}
$maxAttempts = 5;
$lockTime = 600; // 10 minutes

/* 
FETCH USER

*/

$stmt = $connected->prepare(
    "SELECT id, username, email, password, role,image
     FROM users WHERE email=?"
);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

$user = null;
$user_id = 0;

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();
    $user_id = $user['id'];
}

$stmt->close();

/*
CHECK RATE LIMIT
*/

$attemptStmt = $connected->prepare(
    "SELECT attempts 
     FROM login_attempts 
     WHERE email=? 
     AND last_attempt >= (NOW() - INTERVAL 10 MINUTE)"
);

$attemptStmt->bind_param("s", $email);
$attemptStmt->execute();
$attemptResult = $attemptStmt->get_result();

$attemptData = $attemptResult->fetch_assoc();
$attemptStmt->close();

if ($attemptData) {

    $attempts = (int)$attemptData['attempts'];

    if ($attempts >= $maxAttempts) {

        logAction($user_id, "LOGIN BLOCKED - RATE LIMIT");

        http_response_code(401);
        echo json_encode([
            "status" => "error",
            "message" => "Invalid credentials. Try again in 10 minutes."
        ]);
        exit;
    }

} else {
    // Record exists but is expired → delete it cleanly
    $deleteExpired = $connected->prepare(
        "DELETE FROM login_attempts WHERE email=?"
    );
    $deleteExpired->bind_param("s", $email);
    $deleteExpired->execute();
    $deleteExpired->close();
}

/* 
VERIFY PASSWORD

*/

if ($user && password_verify($password, $user['password'])) {

    // SUCCESS LOGIN
    session_regenerate_id(true);
    
    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['role'] = $user['role'];
    $_SESSION['email'] = $user['email'];
    $_SESSION['time'] = time();
    $_SESSION['image']=$user['image'];

    // Clear attempts after success
    $deleteStmt = $connected->prepare(
        "DELETE FROM login_attempts WHERE email=?"
    );
    $deleteStmt->bind_param("s", $email);
    $deleteStmt->execute();
    $deleteStmt->close();

    logAction($user['id'], "LOGIN SUCCESS");

    echo json_encode([
    "status"  => "success",
    "message" => "Login successful",
    "role"    => $user['role']
]);

} else {

    /*

    LOGIN FAILED → INCREMENT ATTEMPTS
   
    */

    if ($attemptData) {

        $updateStmt = $connected->prepare(
            "UPDATE login_attempts 
             SET attempts = attempts + 1,
                 last_attempt = CURRENT_TIMESTAMP
             WHERE email=?"
        );
        $updateStmt->bind_param("s", $email);
        $updateStmt->execute();
        $updateStmt->close();

    } else {

        $insertStmt = $connected->prepare(
            "INSERT INTO login_attempts 
             (email, attempts, last_attempt) 
             VALUES (?, 1, CURRENT_TIMESTAMP)"
        );
        $insertStmt->bind_param("s", $email);
        $insertStmt->execute();
        $insertStmt->close();
    }

    logAction($user_id, "LOGIN FAILED");

    http_response_code(401);
    echo json_encode([
        "status" => "error",
        "message" => "Incorrect email or password"
    ]);
}

$connected->close();