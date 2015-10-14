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


<img id='gamer' src='img/inf.fw.png'>
<div class='gamer' id='inf'><a href='#' id='left'> PC </a> Music Library <a href='#' id='right'> MAP </a> </div>

<img class='gamer' id='frame' src='img/mlib.fw.png'>
<div class='gamer' id='libpan'>

<p> Please Select A Song </p>
";
$sql2 = "SELECT * FROM library ";
$result2=mysqli_query($con,$sql2);
$i=1;
while ($row = mysqli_fetch_assoc($result2)) {

$name= $row["songname"];
echo"
<a class='songs' href='record.php?sname=$name'>$i - $name</a> <br/> ";
$i++;

}


echo"
</div>

";



?>

