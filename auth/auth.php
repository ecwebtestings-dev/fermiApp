<?php
function logAction($user_id, $action){
    global $connected;

    $stmt = $connected->prepare(
        "INSERT INTO audit_logs (user_id, action) VALUES (?,?)"
    );
    $stmt->bind_param("is", $user_id, $action);
    $stmt->execute();
    $stmt->close();
}

