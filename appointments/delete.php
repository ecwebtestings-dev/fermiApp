<?php 
   require __DIR__ . "/../auth/db.php"; 
    require __DIR__ . "/../auth/auth.php";
   // require "auth/auth.php"; 
    //$id=$_GET['id'];
   $id=2;
    
$result=mysqli_query($connected,
    "UPDATE appointments SET status=1
    WHERE id='$id'"
    );




?>