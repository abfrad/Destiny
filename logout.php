<?php
session_start();

session_destroy();

echo "
<script>
$(document).ready(function() {
$('#screen').load('login.php');
 });
</script>
"; 

?>