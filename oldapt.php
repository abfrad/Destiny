<?php
session_start();
if(!isset($_SESSION['name']))
{
echo "
<script>
$(document).ready(function() {
$('#screen').load('login.php');
 });
</script>
"; 
}

$online_user=$_SESSION['name'];
echo "
<img id='gamer' src='img/inf.fw.png'>
<p class='gamer' id='inf'>Old Apartment</p>
<img class='gamer' id='frame' src='img/oldapt.fw.png'>";

echo "<a href='#' id='sleep'> <img  src='img/sleep.fw.png'></a>" ;
echo "<a href='#' id='pc' ><img src='img/pc.fw.png'></a>";
echo " <a href='#' id='out' > <img  src='img/out.fw.png'> </a>
<script>
 $(document).ready(function() {
 
    $('#out').click(function() {
     $('#screen').load('city.php');
       });
    
    $('#sleep').click(function() {
     $('#screen').load('logout.php');
       });
	
	$('#pc').click(function() {
     $('#screen').load('pc.php');
       });	
	   
    });
   
</script>
";

?>

