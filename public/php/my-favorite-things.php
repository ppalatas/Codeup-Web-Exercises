<!DOCTYPE html> 
<html>
		<head>
			<title>My Favorite Things</title>
			 <link href = "/../css/my_favorite_things.css" rel = "stylesheet">
		</head>
		<body>
			<h1>My Favorite Things<h1>
			<?php $favoriteThings = array('Guns', 'Dogs', 'Xbox One', 'Boxing'); ?>
			<ol>
				<?php foreach ($favoriteThings as $thing): ?>
				<li><?= $thing; ?></li>
				<?php endforeach; ?>
				</ol>
		</body>
</html>

