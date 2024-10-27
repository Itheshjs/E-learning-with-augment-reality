<?php

$host="localhost";
$user="root";
$pass="";
$db="project2";
$conn=new mysql($host,$user,$pass,$db);
if($conn->connect_error){
    echo "Failed to connect DB".$conn->connect_error;
}
?>