<?php 

function pageController(){

	$_GET;

	$data = [];

	$data['message'] = 'counter';

	if(isset($_GET['q']))
	{
		$data['counter'] = $_GET['counter'];
	} 
	else 
	{
		$data['counter'] = 0;
	}
	
	if(isset($_GET['q'])){
		if($_GET['q'] == 'up')
		
		{
			$data['counter']++;
		} 
		else
		{
			$data['counter']--;
		}
	}
return $data;
}

extract(pageController());
?>

<!DOCTYPE html>
	<html>
	<head>
		<title>Counter!</title>
	</head>
<body>
	<form method = "GET" action = "#">
		<input type = "hidden" name = "counter" value = <?= $counter?>>
		<input type = "hidden" name = "q" value = "up">
		<button type = "submit">Up</button>
	</form>
	<form method ="GET" action = "#">
		<input type = "hidden" name = "counter" value = <?= $counter?>>
		<input type="hidden" name="q" value = "down">
		<button type = "submit">Down</button>
	</form>
</body>
</html>