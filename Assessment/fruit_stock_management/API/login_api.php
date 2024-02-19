<?php
// Database configuration
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'api';

// Connect to the database
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Get data from the request
header('Content-Type: application/json');
$data = json_decode(file_get_contents('php://input'), true);

if(isset($data["email"]) && isset($data["password"])){
    $em=$data["email"];
    $pa=$data["password"];
    $sel="select * from tbl_users where email='$em' and password='$pa'";
    $exe=mysqli_query($conn,$sel);
    $fetch=mysqli_fetch_array($exe);
    $num=mysqli_num_rows($exe);
    if($num>0)
    {
       echo json_encode(['status'=>'success', 'message'=>'login successfull']);
           
        
    }
    else
    {
        echo json_encode(['status'=>'error','message'=>'email and password are wrong']);
    }
}
else
{
    echo json_encode(['status'=>'error','message'=>'email and password are required']);
}

$conn->close();

?>
