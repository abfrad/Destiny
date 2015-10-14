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
	
	   
	   $('.songs').click(function() {

var selected=$(this).attr('id');

$('#screen').load('play.php?sname='+selected);


});
	
	   
	
});
</script> 


<img   value='sdsdsd' id='gamer' src='img/inf.fw.png'>
<div class='gamer' id='inf'><a href='#' id='left'> PC </a> Discography <a href='#' id='right'> MAP </a> </div>
<img class='gamer' id='avatar' src='img/$charr.fw.png'>
<img class='gamer' id='frame' src='img/dpad.fw.png'>
<div class='gamer' id='dpadinfo'>
<p>$online_user 's Discography</p>
";
$sql2 = "SELECT * FROM disco where player='$online_user' ";
$result2=mysqli_query($con,$sql2);
$i=1;
while ($row = mysqli_fetch_array($result2, MYSQLI_ASSOC)) {

$name= $row["name"];
echo"
<a class='songs' href='#' id='$name'>$i - $name</a>
<br/> ";

$i++;

}

echo"

</div>

";



?>

