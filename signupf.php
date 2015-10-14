<?php
session_start();
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

<img id='gamer' src='img/inf.fw.png'>
<p class='gamer' id='inf'>Sign Up Form</p> 
<img class='gamer' id='frame' src='img/signup.fw.png'>

<script>
 $(document).ready(function() {
    $('#selch').click(function() {
	
	$.post( 'signupc.php', $('#signup').serialize() );
    $('#screen').load('selectchar.php');
       });
	   
    });
   
</script>

<form id='signup' method='post'>

<input type='text' class='signupinput1' name='name'>
<input type='password' class='signupinput2' name='pass'>
<a href='#' id='selch' ><img src='img/sub.fw.png'  class='signupinput3'></a>
</form>

";



?>

