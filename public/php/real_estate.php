<?php 
	var_dump($_GET);
	var_dump($_POST);
?>
<DOCTYPE html>
<html> 
	<head> 
		<title>Real Estate</title>

		<meta charset="utf-8">
		<meta name="viewport" content="device-width">
		
		<style> 
			main {
				text-align: center;
				border: 1px solid black;
				


			}
		</style>

	</head>
	<body>
		<main>
		<form method="POST" action="real_estate.php">
		<section> 
			<h2>Find The Home Of Your Dreams!</h2>
			<br>
				<h3>Do you want to rent or buy?</h3>

					<label><input type="radio" name="q1" value="rent">Rent</label>

					<label><input type="radio" name="q1" value="buy">Buy</label>
				<br>

				<label for="House">What are you looking for?</label>
					<select id="House" name="House">
    					<option>Apartment</option>
    					<option>Town House</option>
    					<option>House</option>
   						<option>condo</option>
					</select>
					</section>
				</form>
				<form action="http://www.zillow.com/homes/search" method="GET">
				<p>
					<label for="fromHomePage">Zipcode:</label>
					<input type="text" name="fromHomePage" id="fromHomePage">
				</p>
				<button type="submit">Zipcode:</button>
				</form>
				</label>

				</section>
			</form>
		</main>
	</body>
</html>	