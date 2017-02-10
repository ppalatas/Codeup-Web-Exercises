<?php 
	var_dump($_GET);
	var_dump($_POST);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Form Practice</title>
		<style>
		
		h1, h2 { 
			color: Blue;
			text-decoration: underline;

		}

		</style>


	</head>
	<body>

    <h1>User Login</h1>
    <!-- Form's action is where the request goes -->
	<form action="GETPOST.php" method="POST">
		<p>
			<label for="username">Username</label>
			<input type="text" id="username" name="username" placeholder="Write your username here.">
		</p>
		<p>
			<label for="Password">Password</label>
			<input type="text" id="Password" name="Password" placeholder="Write your password here.">
		</p>
		<p>
			<button type="submit">Login</button>
		</p>
	</form>
	<form action="GETPOST.php" method="POST">
		<!--- to, from, subject, body, and a send button-->
		<h2>Compose an email</h2>
			<p>
				<label for="from">From:</label>
				<input type="text" name="from" id="from" placeholder="Enter your email here." autofocus required>
			</p>
			<p>
				<label for="to">To:</label>
				<input type="text" name="to" id="to" placeholder="Enter recipient here">
			</p>
			<p>
				<textarea id="email_body" name="email_body" rows="5" cols="40" placeholder="Type your email here!"></textarea>
			</p>
			<br> 
				<input type="checkbox" id="savecopy" name="savecopy" value="yes">
				<label for="savecopy">Save a copy to your sent folder!</label>
			<br> 
				<button type="submit">Send Email</button>
			</form>
			<form>
				
		</body>
</html>
