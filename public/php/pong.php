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
 		<title>Pong</title>
 	</head>
 	<body>
<!--  		<a href = "ping.php?" method ="GET" action = "ping.php">
			<input type = "hidden" name = "counter" value = <?php $counter ?>>
			<input type = "hidden" name = "q" value = "hit">
			<button type = "submit">HIT</button>
 		</form> -->
		<a href ="ping.php?q=miss&counter=0" method = "GET" action = "ping.php">Miss</a>
		<a href ="ping.php?q=hit&counter=<?php echo $counter?>" method = "GET" action = "ping.php">Hit</a>
			<!-- <input type = "hidden" name = "counter" message = <?php $counter ?>>
			<input type = "hidden" name = "q" value = "miss"> -->
			<!-- <button type = "submit">MISS</button> -->
		<!-- </form> -->
 	</body>
 </html>