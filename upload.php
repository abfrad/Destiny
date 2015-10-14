<?PHP
include 'config.php'; 


if(isset($_FILES['data']) and !$_FILES['data']['error']){
   
	$fname =  $_POST['fname'];

    move_uploaded_file($_FILES['data']['tmp_name'], "wav/" . $fname);
	chmod("wav/test.wav" ,777);
	
	
}

ob_end_flush();
?>