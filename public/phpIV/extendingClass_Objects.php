<?php


class Person
{


public $name;
public $languages = ['php', 'js', 'html'];
public $age; 



public function __construct($name, array $languages)
{
	$this->name = $name;
	$this->languages = $languages;

}

$person = new Person('John', ['html'], 23);



}

// if you want to create a new class with the same attributes as person you can use "extends"


//Boat is a vehicle    class Boat extends Vehicle{}
//Car is a vehicle  	class Car extends Vehicle{}

//Dog is an animal 		class Dog extends Animal{}
//Cat is an animal 		class Cat extends Animal{}


class SuperHero extends Person
{
	public $alterEgo;
}

public function alterEgo(){
	return $this->alterEgo;
}

$phillip = Person('Phillip', 'Palatas');
echo $phillip->name;



$dareDevil = new SuperHero("Matt", "Murdock");
$dareDevil->alterEgo = "Daredevil";

echo $dareDevil->alterEgo();






