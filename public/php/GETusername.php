<?php 
$_SESSION; 

$_GET;

if(isset($_GET['username'])){

	$username = $_GET['username'];
} else {

	$username = 'Guest';
}

if(isset($_GET['password'])){
	$password = $_GET['password'];
} else {

	echo 'Please enter your username and password.';
}



 ?>

 <!DOCTYPE html>
 <html>
 	<head>
 		<title>User Login</title>
 	</head>
 <body>
 	<form method ="GET" action ="GETusername.php">
 		<label>Username: </label>
 		<input type ="text" name = "username" id = "username"></form>
 	</form>
 	<form method ="GET" action ="GETusername.php">
 		<label>Password: </label>
 		<input type ="password" name = "password" id = "password"></form>
 	</form>
 	
 		<button type="submit">Login</button>
 	<h3><?php echo $username ?></h3>

 </body>
 </html>