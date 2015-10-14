<?php

include 'config.php'; 
echo "
<script>
$(document).ready(function() {
	$('#right').click(function() {
     $('#screen').load('city.php');
       });
	   
	   $('#left').click(function() {
     $('#screen').load('oldapt.php');
       });
	   
	   
	   $('#tube').click(function() {
     $('#screen').load('play.php');
       });
	   
	   $('#record').click(function() {
     $('#screen').load('mlib.php');
       });
	   
	  $('#dpad').click(function() {
     $('#screen').load('dpad.php');
       });
	   
	$('#disco').click(function() {
     $('#screen').load('disco.php');
       });
});
</script> 


<img  id='gamer' src='img/inf.fw.png'>
<div class='gamer' id='inf'><a href='#' id='left'> Tur Off PC </a>Computer <a href='#' id='right'> MAP </a> </div>
<img class='gamer' id='frame' src='img/pcs.fw.png'>



<a href='#' id='record' class='chars' > <img  src='img/pclink.fw.png'> </a>
<a href='#' id='tube' class='chars' > <img  src='img/pclink.fw.png'> </a>
<a href='#' id='disco' class='chars' > <img  src='img/pclink.fw.png'> </a>
<a href='#' id='dpad' class='chars' > <img  src='img/pclink.fw.png'> </a>




";



?>

