<?php 

require_once "Report.php";

echo "Do you have any idea whi i pulled you over?";

$name = "Bob";
$age = "35";

$report = new Report($name, $age);

$report->writeReport("False Alarm");

echo Report::"Good morning, this morning there are" . " " . $number_OfReports . " " . "reports" .PHP_EOL;
$report = new Report("Jane", "80");
$report->writeReport("doing 90 in 35");

echo PHP_EOL;
echo "Todays total number of reports" . PHP_EOL;
echo Report::$number_OfReports();


//count numbver of reported incidents in the city

// static method property means that we have access to the property (method) -- with no object created. 


//examples of using static reports 

//you just need to call a function buy you dont need an object or dont have an object 
// ex. getNumberofReports();






 ?>