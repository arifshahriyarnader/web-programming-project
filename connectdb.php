<?php 
$host="localhost";
$user="root";
$pass="";
$db="project200_db";

$conn=new mysqli($host,$user,$pass,$db);

if($conn->connect_error){
    die("Error : ".$conn->connect_error);
}

//echo "Connection Establish Successfully";
    
?>
