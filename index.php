<?php
session_start();
echo"<!DOCTYPE html>";
echo "<html>
<head>
<link rel='stylesheet' type='text/css' href='style/style.css'>
<script src='js/jquery-1.10.2.js'></script>
<link rel='shortcut icon' href='img/favicon.ico'>

<script>
 $(document).ready(function() {
 
    $('#start').click(function() {
     $('#screen').load('signupf.php');
       });
	
	
	   
    });  
</script>
<script>
 $(document).ready(function() {
    $('#resume').click(function() {
     $('#screen').load('login.php');
       });
    });
   
</script>

";
if(isset($_SESSION['name']))
{
echo "
<script>
$(document).ready(function() {
$('#screen').load('city.php');
 });
</script>
"; 
}
echo "
</head>
";
echo "
<body>
	<div id='container'>
		<div id='screen'>

			<img id='gamer' src='img/frame.fw.png'>
			<a id='resume' href='#'><img src='img/resume.png'></a>
			<a id='start' href='#'><img src='img/start.png'></a>
		</div>
	</div>
";




echo "</body>";
echo "</html>";
#<embed src='A Little Party Never Killed Nobody (All We Got)_002.mp3' autostart='true' loop='true'>
?>

