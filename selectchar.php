<?php
session_start();
if(!isset($_SESSION['name']))
{
echo "
<script>
$(document).ready(function() {
$('#screen').load('signupf.php');

 });
  
</script>
"; 
}
$online_user=$_SESSION['name'];

echo "
<script>
$(document).ready(function() {


$('.chars').click(function() {

var selected=$(this).attr('id');
$.post( 'pbuild.php', { charr: selected} );
$('#screen').load('dpad.php');


});


});
</script> 

<img   value='sdsdsd' id='gamer' src='img/inf.fw.png'>

<img id='gamer' src='img/chars.fw.png'>";


echo " 


<a href='#' id='skrillex' class='chars' > <img  src='img/shade.fw.png'> </a>
<a href='#' id='gaga' class='chars' > <img  src='img/shade.fw.png'> </a>
<a href='#' id='levine' class='chars' > <img  src='img/shade.fw.png'> </a>
<a href='#' id='rihanna' class='chars' > <img  src='img/shade.fw.png'> </a>
<a href='#' id='hurts' class='chars' > <img  src='img/shade.fw.png'> </a>
<a href='#' id='lana' class='chars' > <img  src='img/shade.fw.png'> </a>

";

?>

