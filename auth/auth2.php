<?php 
    function logAction($connected, $user_id, $action) {

    if (!$connected) {
        return false;
    }

    $stmt = $connected->prepare(
        "INSERT INTO audit_logs (user_id, action, created_at)
         VALUES (?, ?, NOW())"
    );

    if (!$stmt) {
        return false;
    }

    $stmt->bind_param("is", $user_id, $action);
    $success = $stmt->execute();
    $stmt->close();

    return $success;
}
 
?>