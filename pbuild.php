<?php
include 'config.php'; 



  $charr= $_POST["charr"];
  
  mysqli_query( $con,"UPDATE player SET pop=0, charr='$charr', money=500 WHERE username='$online_user' ") ;



ob_end_flush();
?> 




