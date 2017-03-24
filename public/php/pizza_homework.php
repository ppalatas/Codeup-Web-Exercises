<!DOCTYPE html>
<html>
	<head>
		<title>Pizza Palace</title>
		<meta charset= "utf-8">
		<meta name="viewport" content="width-device">
	<style> 

		body {

			margin-top: -18px;

		}

		h1, h2, h3, h4 {

			text-decoration: underline;
			color: blue;
			text-align: center;
			text-decoration: bold;

		}


		.main_container{
			
			background-color: #F1F1F1


		}

		#container {

			margin: 0 auto;
			width: 500px;
			background-color: #DDD;

		}
		
	</style>
	</head>
	<body>
		<div class="main_container">
		<main id="container">
		<form method="POST" action="/pizza_homework.php">
			<article>
			<h3>Build Your Own Pizza!</h3>
			<br>
			<h4> What Size Do You Want</h4>
			<center><select> 
				<option value="Medium">Medium</option>
				<option value="Large">Large</option>
				<option value="Extra-Large">Extra-Large</option>
			</select></center>
			<br>
			<h4>Choose Your Cheese!</h4>
				<section>
					<label><input type="checkbox" id="os1" name="os[]" value="mozzarella">Mozzarella</label>    
					<label><input type="checkbox" id="os2" name="os[]" value="cheddar">Cheddar</label>

					<label><input type="checkbox" id="os3" name="os[]" value="Colby">Colby</label>

					<label><input type="checkbox" id="os4" name="os[]" value="Edam">Edam</label>

					<label><input type="checkbox" id="os5" name="os[]" value="Emmental">Emmental</label>

					<label><input type="checkbox" id="os6" name="os[]" value="Gruyere">Gruyere</label><br>

					<label><input type="checkbox" id="os7" name="os[]" value="provolone">Provolone</label>
					<hr>
				</section>
			<br>
			<h4>Pick Your Toppings!</h4>
				<section>
					<label><input type="checkbox" name="os1" value="pineapple">Pineapple</label>

					<label><input type="checkbox" name="os2" value="spinach">Spinach</label>

					<label><input type="checkbox" name="os3" value="onions">Onions</label>

					<label><input type="checkbox" name="os4" value="sausage">Sausage</label>

					<label><input type="checkbox" name="os5" value="italian sausage">Italian Sausage</label>

					<label><input type="checkbox" name="os6" value="olives">Olives</label>

					<label><input type="checkbox" name="os7" value="bacon">Bacon</label>

					<label><input type="checkbox" name="os8" value="pepperoni">pepperoni</label>

					<label><input type="checkbox" name="os9" value="mushrooms">Mushrooms</label>

					<label><input type="checkbox" name="osa" value="ham">Ham</label>

					<label><input type="checkbox" name="osb" value=""></label>
					
					<hr>

				</section>
				
				
				<section class="left"> 
					<h3>Become A Member For Faster Future Check Out!</h3>
					<p>
						<label for="first_name">First Name:</label>
						<input id="first_name" name="first_name" type="text" placeholder="First Name">
					</p>
					<p> 
						<label for="last_name">Last Name:</label>
						<input id="last_name" name="last_name" type="text" placeholder="Last Name">
					</p>
					<br>
						<label for="username">Username:</label>
						<input id="username" name="username" type="text" placeholder="Username">
					<br>
						<label for="password">Password:</label>
						<input id="password" name="password" type="password" placeholder="Password">
					<br> 
						<label for="email">Email Address:</label>
						<input id="email" name="email" placeholder="Enter Your Email">
					<br>
					<hr>
						<p><em>Would you like to recieve coupons and other special offers?</em></p>
						<label>
							<input type="radio" name="q1" value="Yes" checked="checked">Yes</input>
						</label>
						<label>
							<input type="radio" name="q1" value="no">No</input>
						</label>
					<hr>
					<p>
						<button type="submit">Continue as Member!</button>
						<button type="submit">Continue as Guest</button>
					</p>
				</article>
				</section>
			</main>
		</div>
	</body>
</html>
