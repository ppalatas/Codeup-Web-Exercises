<?php 

	$favoriteThings =['Guns', 'Dogs', 'Xbox One', 'Boxing'];

?>

<!DOCTYPE html> 
<html>
		<head>
			<title>My Favorite Things</title>
			 <link href = "/../css/my_favorite_things.css" rel = "stylesheet">
		</head>
		<body>
			<h1>My Favorite Things<h1>
			<ol>
				<?php foreach($favoriteThings as $favoriteThing){ ?>
				<li><?php echo $favoriteThing; ?></li>
				<?php } ?>
				</ol>
		</body>
</html>

