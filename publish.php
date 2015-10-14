<?php
include 'config.php'; 
$instrum=$_POST['instrum'];
$url=$_POST['url'];
$name=$_POST['name'];
$sql2 = "insert into disco values ('$instrum','$url','$online_user','$name')";
$result2=mysqli_query($con,$sql2);

ob_end_flush();
?> 




