<?php
include 'config.php'; 

echo "<img id='gamer' src='img/inf.fw.png'>
<div class='gamer' id='inf'> Map <a href='#' id='right'> Log Out </a> </div>
<img id='frame' class='gamer' src='img/City.fw.png'>

";
if ($pop >= 3){
echo "
<a class='bever' id='beve' href='#'><img src='img/bv2.fw.png'></a>
"; }
else {
echo "
<img class='bever' src='img/bv.fw.png'>
";
}
echo "


<a id='apt' href='#'><img src='img/apt.fw.png'></a>
<script>
 $(document).ready(function() {
    $('#apt').click(function() {
     $('#screen').load('oldapt.php');
       });
	   
	   $('#right').click(function() {
     $('#screen').load('logout.php');
       });
    });
   
</script>



";


ob_end_flush();
?>

