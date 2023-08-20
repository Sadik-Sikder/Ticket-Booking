<?php
$host="localhost";
$dbname="sign_db";
$username="root";
$password="";

$mysqli = new mysqli(hostname:$host,
                     username:$username,
                     password:$password,
                     database:$dbname);
if($mysqli->connect_errno){
    die("connection error: ".$mysqli->connect_error);
}  
return $mysqli;   
?>       