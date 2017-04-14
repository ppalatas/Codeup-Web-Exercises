<?php
require_once 'Rectangle.php';
require 'Square.php';

$rectangle = new Rectangle (5, 8);
	 echo PHP_EOL;

	echo "The height of the rectangle is :" . " " . $rectangle->height . PHP_EOL;
	echo "The width of the rectangle is :" . " " . $rectangle->width . PHP_EOL;
	
	echo "The area of the rectangle is: " . " " .  $rectangle->area() . PHP_EOL;


 	echo PHP_EOL;
 	echo PHP_EOL;

$secondRectangle = new Rectangle (52, 108);
	echo PHP_EOL;

	echo "The height of the rectangle is :" . " " . $secondRectangle->height . PHP_EOL;
	echo "The width of the rectangle is :" . " " . $secondRectangle->width . PHP_EOL;
	
	echo "The area of the rectangle is: " . " " .  $secondRectangle->area() . PHP_EOL;
	echo PHP_EOL;

 	echo PHP_EOL;
 	echo PHP_EOL;

 $square = new Square (50, 50);
 	echo PHP_EOL;

	echo "The area of this square is: " . " " . $square->area() . PHP_EOL; 	
	echo "The perimiter of this square is: " . " " . $square->perimeter() . PHP_EOL;

	echo PHP_EOL;
?>