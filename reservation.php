<?php

if ($_SERVER["REQUEST_METHOD"] != "POST") {
  die("Invalid request");
}


$from = $_POST["from"];
$to = $_POST["to"];
$date = $_POST["date"];
$time = $_POST["time"];
$passengers = $_POST["passengers"];


if (empty($from) || empty($to) || empty($date) || empty($time) || empty($passengers)) {
  die("Please fill in all the required fields");
}

$mysqli = require __DIR__ . "/database.php";

$sql = "INSERT INTO reservations (form, too, date, time, passengers) VALUES (?, ?, ?, ?, ?)";

$stmt=$mysqli->stmt_init();

if(!$stmt->prepare($sql)){
die("SQL error: ".$mysqli->error);
}

$stmt->bind_param("ssssi",$_POST["from"], $_POST["to"], $_POST["date"], $_POST["time"], $_POST["passengers"]);


try{
    if ($stmt->execute()) {
      header("Location: success.php");
        exit;
    }
    else
     throw new Exception;
}
 catch(Exception $e){
      echo $e;

 }
$stmt->close();
$mysqli->close()

?>
