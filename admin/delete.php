<?php 
   require __DIR__ . "/../auth/db.php"; 
    require __DIR__ . "/../auth/auth.php";
   // require "auth/auth.php"; 
    $id=$_GET['id'];
   
    $result1=mysqli_query($connected,
    "SELECT * FROM users WHERE id='$id'
    "
);
$user=mysqli_fetch_assoc($result1);
    $result=mysqli_query($connected,
    "UPDATE users SET status=1
    WHERE id='$id'"
    );

logAction($user['id'],"USER DELETE SUCCESIFUL");

?>