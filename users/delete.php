<?php 
    
    require "auth/db.php";
    require "auth/auth.php"; 
    $id=$_GET['id'];
    $result=mysqli_query($connected,
    "DELETE FROM users WHERE id='$id'"
    );

logAction($id,"USER DELETE SUCCESSFUL");

?>