<?php

session_start();
if(!isset($_SESSION['name']))
{
header('location:index.php');
}
 else { 
 
$online_user=$_SESSION['name'];

$host       = "localhost";
$username   = "root";
$password   = "gogogaga";
$db_name    = "destiny";
$tbl_name   = "player";
$row="";

$con=mysqli_connect("$host", "$username", "$password","destiny") or die ("cannot connect");

$sql = "SELECT * FROM $tbl_name WHERE username = '$online_user'";
$result = mysqli_query($con,$sql);


$row = mysqli_fetch_assoc($result);

$pop= $row["pop"];
$charr= $row["charr"];
$money= $row["money"];


//if someone hasnt already chosen thier chracter in the game
if ($charr=="") {
echo "
<script>
$(document).ready(function() {
$('#screen').load('selectchar.php');
 });
</script>
"; 

}
}
?>