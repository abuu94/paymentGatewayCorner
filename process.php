<?php 
include 'database.php';
//check if form submitted

if (isset($_POST['submit'])){
	$user = mysqli_real_escape_string($con,$_POST['user']);
	$message = mysqli_real_escape_string($con,$_POST['message']);
	
	//set timezone
	date_default_timezone_set('Africa/Nairobi');
	$time=date('h:i:s a',time());
	
	//validate input
	if (!isset($user) || $user == '' || !isset($message) || $message == ''){
		$error="Please fill in your name and a message";
		header("Location: index.php? error".urlencode($error));
		exit();
	}else{
		$query = "INSERT INTO shoutstb (user,message,time)
					VALUES ('$user','$message','$time')";
		if (!mysqli_query($con,$query)){
			die('Error '.mysqli_error($con));
			
		}else{
			header("Location: index.php");
			exit();
		}
		
	}
}
?>
