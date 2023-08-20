<?php

if(empty($_POST["username"])){
    die("Name is required");
}
if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
    die("Valid email is required");
}
if(strlen($_POST["password"])<8)
{
    die("Password must be 8 letters long");
}
if(!preg_match("/[a-z]/i",$_POST["password"])){
    die("Password must contain a letter");
}

if(!preg_match("/[0-9]/",$_POST["password"])){
    die("Password must contain a number");
}


$password_hash=password_hash($_POST["password"],PASSWORD_DEFAULT); 

$mysqli = require __DIR__ . "/database1.php";
$sql="INSERT INTO user(name,email,password_hash)
      VALUES(?,?,?)";
$stmt=$mysqli->stmt_init();

if(!$stmt->prepare($sql)){
    die("SQL error: ".$mysqli->error);
}

$stmt->bind_param("sss",
                  $_POST["username"],
                  $_POST["email"],
                  $password_hash);

try{
    if ($stmt->execute()) {

        header("Location: signup_success.php");
        exit;
        
    }
    else
     throw new Exception;
}
 catch(Exception $e){
    die("Try again there's been an error");

 }
                  

?>