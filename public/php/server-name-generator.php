<?php 

	$adjectives =['mammoth', 'giant', 'spotty', 'boundless', 'thoughtful', 'barbarous
	', 'languid', 'chunky', 'dizzy', 'unsightly'];
	$nouns = ['dog' , 'America', 'lion', 'gun', 'whiskey', 'freedom', 'computer', 'bench', 'hospital', 'hammer'];

function randomServerName($array, $array2){

	$randomAdjectiveIndex = mt_rand(0, count($array) -1);
	$randomAdjective = $array[$randomAdjectiveIndex];

	$randomNounIndex = mt_rand(0, count($array2) -1);
	$randomNoun = $array2[$randomNounIndex];

	return $randomAdjective . " " . $randomNoun . PHP_EOL;
}


?>
<!DOCTYPE html>
<html>
		<head>
			<title>Sever Generater</title>
		</head>
		<body>
			<h1><?php echo randomServerName($adjectives, $nouns);?><h1>
		</body>
</html>