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

echo "<html>
<head>
<script src='js/jquery-1.10.2.js'> </script>

</head> <body>
<div><img id='gamer' src='img/inf.fw.png'>
<p class='gamer' id='inf'>Log In Form</p></div>
<img id='frame' class='gamer' src='img/login.fw.png'>";

echo "


<script>
 $(document).ready(function() {
    $('#selch').click(function() {
	
    $.post( 'loginc.php', $('#login').serialize() );
	$('#screen').load('city.php');
 
       });
    });
   
</script>

<form id='login' method='post' action='' >

<input type='text' class='signupinput1' name='name'>
<input type='password' class='signupinput2' name='pass'>
<a href='#' id='selch' ><img src='img/sub.fw.png'  class='signupinput3'></a>
</form>
</body>
</html>
";



?>

