<?php 

	$adjectives =['mammoth', 'giant', 'spotty', 'boundless', 'thoughtful', 'barbarous
	', 'languid', 'chunky', 'dizzy', 'unsightly'];
	$noun = ['dog' , 'America', 'lion', 'gun', 'whiskey', 'freedom', 'computer', 'bench', 'hospital', 'hammer'];

function randomServerName($array, $array2){
	
	$randomIndex = mt_rand(0, count($array) -1);
	$randomAdjective = $array[$randomIndex];
	$randomNoun = $array2[$randomIndex];

	$randomName = $randomNoun . " " . $randomAdjective . PHP_EOL;
	return $randomName;
}

?>
<!DOCTYPE html>
<html>
		<head>
			<title>Sever Generater</title>
		</head>
		<body>
			<h1><?php echo randomServerName($adjectives, $noun);?><h1>
		</body>
</html>