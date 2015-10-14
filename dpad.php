<?php

include 'config.php'; 
echo "
<script>
$(document).ready(function() {
	$('#right').click(function() {
     $('#screen').load('city.php');
       });
	   $('#left').click(function() {
     $('#screen').load('pc.php');
       });
	
});
</script> 


<img   value='sdsdsd' id='gamer' src='img/inf.fw.png'>
<div class='gamer' id='inf'> Destiny Pad <a href='#' id='right'> MAP </a><a href='#' id='left'> PC </a> </div>
<img class='gamer' id='avatar' src='img/$charr.fw.png'>
<img class='gamer' id='frame' src='img/dpad.fw.png'>
<div class='gamer' id='dpadinfo'>
<h1>$online_user</h1>
<p>Popularity from 0 - 10 : $pop </p>
<p>Money: $money  $</p>
</div>

";



?>

