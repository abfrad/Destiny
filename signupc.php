<?php
session_start();
// Create connection
$con=mysqli_connect("localhost","root","gogogaga","destiny");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  $name= $_POST["name"];
  $pass=  $_POST["pass"]; 
  
$name = stripslashes($name);
$pass = stripslashes($pass);
  
  if ($name != "" and $pass != "") {
  mysqli_query( $con,"INSERT INTO player (username, password)
VALUES ('$name','$pass')") ;

}


$sql = "SELECT * FROM player WHERE username = '$name'
and password = '$pass'";
$result = mysqli_query($con,$sql);


$count = mysqli_num_rows($result);

if($count==1){


$_SESSION['name'] = $name;
$_SESSION['pass'] = $pass;

}


ob_end_flush();
?> 




