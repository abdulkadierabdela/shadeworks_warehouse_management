<?php 
require_once 'includes/db_connect.php';

session_start();

if(isset($_SESSION['userId'])) {
	header('location:'.$store_url.'login.php');		
}



if($_POST) {		

	$username = $_POST['username'];
	$password = $_POST['password'];

	if(empty($username) || empty($password)) {
		if($username == " ") {
			echo( "Username is required");
		} 

		if($password == " ") {
			echo( "password is required");		}
	} else {
		$sql = "SELECT * FROM users WHERE username = '$username'";
		$result = $connect->query($sql);

		if($result->num_rows == 1) {
			$password = ($password);
			// exists
			$mainSql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
			$mainResult = $connect->query($mainSql);

			if($mainResult->num_rows == 1) {
				$value = $mainResult->fetch_assoc();
				$user_id = $value['user_id'];

				// set session
				$_SESSION['userId'] = $user_id;

				header("location: side.php");	
			} 
			else{
				
			echo("Incorrect username/password combination");
			 // /else
		}
			} // /else not empty username // password
		}
} // /if $_POST
?>





