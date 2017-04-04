<?php 
public $name; 

public $age; 

public static $numberofReports = 0; // static
class Report{
	
	public function __construct($name = "John Doe", $age){
	
		$this->name = $name;
		$this->age = $age;
	
		// every time that we make a new report object we increment new reports 
		static::$numberofReports++;

	}
	
	public function writeReport($message){
		// has all of the code logMessage does 
	}
	
	public function getNumberOfReports(){
		return static::$numberofReports;
	}
}








 ?>