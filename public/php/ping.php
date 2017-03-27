<?php 
//secondary ping/pong
function pageController(){

	$_GET;

	var_dump($_GET);

	$data = array();

	$data['message'] = 'counter';
	if(isset($_GET['q'])){
		$data['counter'] = $_GET['counter'];
	} else {
		$data['counter'] = 0;
	}

	if(isset($_GET['q'])){
		if($_GET['q'] == 'hit'){
			$data['counter']++;
		} else{
			$data['counter'] = 0;
		}
	}
	return $data;
}
extract(pageController());

 ?>

 <!DOCTYPE html>
 	<html>
 	<head>
 		<title>Ping</title>
 	</head>
 	<body>
 		<a href= "pong.php?q=miss&counter=0">Miss</a>
 		<a href = "pong.php?q=hit&counter=<?php echo $counter?>">Hit</a>
 	</body>
 </html>