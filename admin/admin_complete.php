<?php 
    $id = (int)$_POST['id'];

mysqli_query($connected,"
UPDATE appointments 
SET status=1 
WHERE id=$id
");

logAction($_SESSION['user_id'],"Marked appointment as completed"); 
?>