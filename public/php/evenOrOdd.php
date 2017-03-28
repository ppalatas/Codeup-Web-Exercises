<?php 
// Create a function that takes an integer as an argument and returns "Even" for even numbers or "Odd" for odd numbers.

function evenOdd($int){

	if($int % 2 == 1){
		return "Number is odd." . PHP_EOL;
	} else if($int % 2 == 0){
		return "Number is even" . PHP_EOL;
	}
}
echo evenOdd(23);