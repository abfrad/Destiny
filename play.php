<?php

include 'config.php';
$player ='Artist';
$sname='Song';
if (isset($_GET['sname'])) {

$sname= $_GET['sname'];

$sql3 = "SELECT * FROM disco where name='$sname'";
$result3=mysqli_query($con,$sql3);
$count3 = mysqli_num_rows($result3);

if($count3 == 1) {

$row3 = mysqli_fetch_assoc($result3);
$instrum=$row3["instrum"];
$surl= $row3["url"];
$player=$row3["player"];

$sql5 = "SELECT * from player where username='$player'";
$result5=mysqli_query($con,$sql5);
$row5=mysqli_fetch_assoc($result5);
$money5=$row5["money"];
$pop5=$row5["pop"];
/*  echo "<script>
alert ('$money5');
</script> "; */
		
		if ($money5<10000){
		$money5+=50;
		$pop5=0;
		}
		else if ($money5<=50000){
		$money5+=500;
		$pop5=1;
		}
		else if ($money5<=100000){
		$money5+=1000;
		$pop5=2;
		}
		else if ($money5<=500000){
		$money5+=10000;
		$pop5=3;
		}
		else if ($money5<=1000000){
		$money5+=20000;
		$pop5=4;
		}
		else if ($money5<=5000000){
		$money5+=50000;
		$pop5=5;
		}
		else if ($money5<=20000000){
		$money5+=100000;
		$pop5=6;
		}
		else if ($money5<=50000000){
		$money5+=200000;
		$pop5=7;
		}
		else if($money5>50000000){
		$money5+=300000;
		$pop5=8;
		}
	/*	echo "<script>
alert ('$money5');
</script> "; */
$sql51 = "update player set money=$money5,  pop=$pop5 where username='$player'";
$result51=mysqli_query($con,$sql51);

$sql4 = "SELECT * FROM library where songname='$instrum'";
$result4=mysqli_query($con,$sql4);
$row4 = mysqli_fetch_assoc($result4);
$iurl= $row4["url"]; 


		
		

echo "
<audio  id='instrum' >
<source src='$iurl' >
</audio>
<audio  id='voice' >
<source  src='$surl' >
</audio>


";

}
}
echo "
<script>
var instrum = document.getElementById('instrum');
var voice= document.getElementById('voice');

 var playbt= document.getElementById('playbt');
 var pausebt= document.getElementById('pausebt');
 playbt.addEventListener('click', playit, false); 
 pausebt.addEventListener('click', pauseit, false); 
 
function playit (){
voice.play();
instrum.play();
$('#playbt').hide();
$('#pausebt').show();

} 
function pauseit (){
voice.pause();
instrum.pause();
$('#pausebt').hide();
$('#playbt').show();

} 
 

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
<div class='gamer' id='inf'><a href='#' id='left'> PC </a> PLAY <a href='#' id='right'> MAP </a> </div>

<img class='gamer' id='frame' src='img/play.fw.png'>

<div class='gamer' id='playpan'>
<p> $sname - $player </p>
<a id='playbt' href='#'><img src='img/playb.fw.png'></a>
<a id='pausebt' href='#' hidden><img src='img/pause.fw.png'></a>
</div>

<div class='gamer' id='playlist'>
";
$sql2 = "SELECT * FROM disco ";
$result2=mysqli_query($con,$sql2);

while ($row2 = mysqli_fetch_assoc($result2)) {

$name= $row2["name"];
$playerr=$row2["player"];
echo"
<a class='songs' href='#' id='$name' >$playerr - $name</a>
<br/> ";


}
echo"
</div>

";



?>

