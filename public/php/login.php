<?php 
function pagecontroller(){
$_SESSION;

$session_start();

$sessionId = session_id();

$loggedInUser = isset($_SESSION['logged_in_user']) ? $_SESSION['logged_in_user'] : 0;

$viewCount++;


	$data = array();

		$username = isset($_POST['username'])? $_POST['username'] : "";
		$password = isset($_POST['password'])? $_POST['password'] : "";

		if ($username == 'guest' && $password == 'password'){
			
			$_SESSION['view_count'] = $viewCount;
			$_SESSION['logged_in_user'] = $username;
			header('location: http://codeup.dev/php/authorized.php');
		} 
	return $data;

	} 

extract(pagecontroller());

 ?>

 <!DOCTYPE html>
 	<html>
 	<head>
 		<title>Login Page</title>
 		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

 	</head>
 	<body>
 		<h1>Login!</h1>
		<form action="login.php" method = "POST">
			<label type = "text" name="username">Username: </label>
			<input type = "text" name = "username" id = "username" placeholder = "Username Here"></input>

			<label name = "password">Password: </label>
			<input class ="type = "password" name = "password" id = "password" Placeholder = "Password Here">

			<button class = "btn btn-primary" type = "submit">Login</button>
		</form> 	
	</body>
 </html>