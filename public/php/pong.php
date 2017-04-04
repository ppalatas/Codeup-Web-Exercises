<?php 

//secondary ping/pong
require_once ("Input.php"); 

echo Input::get('counter');


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
 		<title>Pong</title>
 	</head>
 	<body>
		<a href ="ping.php?q=miss&counter=0">Miss</a>
		<a href ="ping.php?q=hit&counter=<?php echo $counter +1?>">Hit</a>

 	</body>
 </html>