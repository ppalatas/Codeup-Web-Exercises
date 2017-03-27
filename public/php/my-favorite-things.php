<?php

function pageController(){

	$data = []; 

	$data['message'] = 'My favoriteThings';
	
	$data['things'] = ['Gym', 'Dogs', 'Xbox One', 'Boxing'];

	return ($data);
}
extract(pageController());
// Only use echo and loops inside the HTML of the script/document. 
?>
<!DOCTYPE html> 
<html>
		<head>
			<title>My Favorite Things</title>
			 <link href = "/../css/my_favorite_things.css" rel = "stylesheet">
			 <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
		</head>
		<body>
			<h1 class = "oswald"><?php echo $message; ?><h1>
			<ol>
				<?php foreach ($things as $thing): ?>
				<li class= "oswald"><?= $thing; ?></li>
				<?php endforeach; ?>
			</ol>		
		</body>
</html>

