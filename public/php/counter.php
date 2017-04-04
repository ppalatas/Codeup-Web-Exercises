<?php 
function pageController(){
	$_GET; 

	var_dump($_GET);

	$data = array(); 

	$data['messsage'] = 'counter';

	if (isset($_GET['q'])){
		$data['counter'] = $_GET['counter'];
		}else{

			$data['counter'] = 0;
		}
	if (isset($_GET['q'] )){
		if($_GET['q'] == "up")){

		$data['counter']++;
	} else {
		$data['counter']--;
		
		}
	}
});

pageController();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Counter</title>
</head>
<body>
<form method = "get" action ="#">
	<input type = "hidden" name = "counter" value = <?php $message ?>>
	<input type = "hidden" name = "q" value = "up">
</body>
</html>















































// function pageController(){
// 	$_GET;
// 	var_dump($_GET);

// 	$data = array();

// 	$data['message'] = 'counter';

// 	if (isset($_GET['q'])){
// 		$data['counter'] = $_GET['counter'];
// 	} else {
// 		$data['counter'] = 0;
// 	}
// 	if(isset($_GET['q'])){
// 		if($_GET['q'] == "up"){
// 			$data['counter']++;
// 		}else{
// 			$data['counter']--;
// 		}
// 	}

// return $data;
// }

// extract(pageController());

// ?>


//<!--  <!DOCTYPE html>
// <html>
// <head>
// 	<title>Counter</title>
// </head>
// <body>
// 	<h1>Counter</h1>
	<h2><?php  $counter ?></h2>
// 	<form action = "#" method = "GET">
// 		<input type = "hidden" name = 'counter' value = <?= $counter ?>>
// 		<input type = "hidden" name = "q" value = "up">
// 		<button>Up</button>
// 	</form>
// 	<form action = "#" method = "GET"> 
// 		<input type = "hidden" name = 'counter' value = <?= $counter ?>>
// 		<input type = "hidden" name = "q" value = "down">
// 		<button>Down</button>
// </body>
// </html> -->