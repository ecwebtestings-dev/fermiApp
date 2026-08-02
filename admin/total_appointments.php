<?php 
require __DIR__ . "/../auth/db.php";
require __DIR__ . "/../auth/auth.php"; 

//total users
$result1=mysqli_query($connected,
"SELECT COUNT(*) AS pending_appointments
FROM appointments
WHERE status=0
"
);
$pending = [];
while($row = mysqli_fetch_assoc($result1)){
    $pending[] = $row;
}




//second inactive
$result2=mysqli_query($connected,
"SELECT COUNT(*) AS completed_appointments 
FROM users
WHERE status=1
"
);
$completed= [];
while($row = mysqli_fetch_assoc($result2)){
    $completed[] = $row;
}

header("content-type:application/json");
echo json_encode(
    [
       
         $pending,
         $completed
]);




?>