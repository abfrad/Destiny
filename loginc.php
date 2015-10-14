<?PHP
session_start();
$host       = "localhost";
$username   = "root";
$password   = "gogogaga";
$db_name    = "destiny";
$tbl_name   = "player";
$productname ="";
	$i=0;
	$row="";

$name= $_POST["name"];
$pass=  $_POST["pass"]; 	
if ($name != "" and $pass != "") {

$con=mysqli_connect("$host", "$username", "$password","destiny") or die ("cannot connect");

$sql = "SELECT * FROM $tbl_name WHERE username = '$name'
and password = '$pass'";
$result = mysqli_query($con,$sql);
$count = mysqli_num_rows($result);

if($count == 1) {
    $_SESSION['name'] = $name;
    $_SESSION['pass'] = $pass;
//    header('location:login_success.php');
	
	
	
}



else {
    echo 'Wrong Username or Password =' ;
}


}
ob_end_flush();
?>