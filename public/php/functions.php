<?php 


function inputHas($key){
	// if(array_key_exists($key, $get)){
	// 	return 'true'; 

	// } else { 
	// 	return 'false';
	// }  OR check below

	$checkIfExists = (array_key_exists($key, $_REQUEST) ? "true" : "false") . PHP_EOL;

	return $checkIfExists;
}




function inputGet($key){
	if(isset($_REQUEST[$key])){
		$value = $_REQUEST[$key];
		return $value;
	} else {
		return null;
	}
}


function escape($input){
	return htmlspecialchars($input);

}




 ?>