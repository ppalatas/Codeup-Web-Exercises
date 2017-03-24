<?php 

	$adjectives =['mammoth', 'giant', 'spotty', 'boundless', 'thoughtful', 'barbarous
	', 'languid', 'chunky', 'dizzy', 'unsightly'];
	$noun = ['dog' , 'America', 'lion', 'gun', 'whiskey', 'freedom', 'computer', 'bench', 'hospital', 'hammer'];

function randomArrayElement($array)
{
	return $array[mt_rand(0, count($array) -1)];
}

function randomServerName($array1, $array2)
{
	return randomArrayElement($array1) . " " . randomArrayElement($array2);
}
echo randomServerName($adjectives, $noun);

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