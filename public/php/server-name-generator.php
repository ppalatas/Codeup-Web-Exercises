<?php 

	$adjectives =['mammoth', 'giant', 'spotty', 'boundless', 'thoughtful', 'barbarous
	', 'languid', 'chunky', 'dizzy', 'unsightly'];
	$noun = ['dog' , 'America', 'lion', 'gun', 'whiskey', 'freedom', 'computer', 'bench', 'hospital', 'hammer'];

function randomServerName($array){
	$randomIndexAdjective = mt_rand(0, count($array) -1);
	$randomAdjective = $array[$randomIndexAdjective];
	// $randomNoun = mt_random(0, count($array2) -1);

	return $randomAdjective;
}
?>
<!DOCTYPE html>
<html>
		<head>
			<title>Sever Generater</title>
		</head>
		<body>
			<h1><?php echo randomServerName($adjectives);?><h1>
		</body>
</html>