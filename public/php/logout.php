<?php 

$_SESSION;

function clearSession(){
	session_unset();

	session_regenerate_id(true);

	header('location:http://codeup.dev/php/login.php');

}





 ?>