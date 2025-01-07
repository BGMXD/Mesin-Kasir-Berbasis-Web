<?php
class connect {
    var $host;
    var $user;
    var $pass;
    var $db;
    var $conn;
}


$host="localhost";
$user="root";
$pass="";
$db="starweb";
$conn=new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
    echo "Failed to connect DB".$conn->connect_error;
}
?>