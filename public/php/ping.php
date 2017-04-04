<?php 

require_once ("Input.php"); 

echo Input::get('counter');

// $counter = 0;

function pageController(){

	var_dump($_GET);

	$data = array();

	$data['counter'] = Input::get('counter', 0);
	
	return $data;
}
extract(pageController());
var_dump($counter);
 ?>

 <!DOCTYPE html>
 	<html>
 	<head>
 		<title>Ping</title>
 	</head>
 	<body>
 	<a href ="pong.php?q=miss&counter=0">Miss</a>
	<a href ="pong.php?q=hit&counter=<?php echo $counter +1 ?>">Hit</a>
 		<!-- <form method ="GET" action = "">
			<input type = "hidden" name = "counter" value = "<?php $counter ?>">
			<input type = "hidden" name = "q" value = "hit">
			<button type = "submit">HIT</button>
 		</form>
		<form method = "GET" action = "">
			<input type = "hidden" name = "counter" value = "0">
			<input type = "hidden" name = "q" value = "miss">
			<button type = "submit">MISS</button>
		</form> -->
 	</body>
 </html>