<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
include 'dbcon.php';
	
?>


<?php
	

	session_start();
	
	$email=$_SESSION['email'];
	
	$res = logout($con,$email);
	
	if(!isset($login_session))
	{
		header("Location:home.php");
	}
?>

<?php
	
	if(session_destroy())
	{
	header("Location: home.php");
	}
?>
