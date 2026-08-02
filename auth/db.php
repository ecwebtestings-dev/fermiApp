<?php

$connected = mysqli_connect("localhost","root","","winter");

if (!$connected) {
    http_response_code(500);
    echo json_encode([
        "status"=>"error",
        "message"=>"Database connection failed"
    ]);
    exit;
}

/* Only change session settings if session not started */
if (session_status() === PHP_SESSION_NONE) {
    ini_set('session.cookie_httponly', 1);
    ini_set('session.use_only_cookies', 1);
}
?>