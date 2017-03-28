<?php 
$_SESSION;

$user_logged_in = isset($_SESSION['user_logged_in']) ? $_SESSION['user_logged_in'] : 0;

if($user_logged_in != 'guest'){
	header('location: http://codeup.dev/php/login.php');
} else{ 
	echo $username;
}

?>

 <!DOCTYPE html>
 	<html>
 	<head>
 		<title>Authorized</title>
 	</head>
 	<body>
		<h1>Authorized</h1>
 	</body>
 </html>