<?php
$con=mysqli_connect("localhost","USERNAME","PASSWORD","DBNAME");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$user =  $_POST['user'];
$message = $_POST['message'];
echo $user;
echo $message;
$time = date("Y-m-d h:i:s");
$message = str_replace("'","''",$message);

$sql="INSERT INTO Chat (Time, User, Message)
VALUES ('$time', '$user', '$message')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}

mysqli_close($con);
?>
