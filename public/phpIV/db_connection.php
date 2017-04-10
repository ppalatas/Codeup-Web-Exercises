<?php 

//mysql -u vagrant -p -- localhost / 127.0.0.1
// DSN Data Source Name
// 1 Driver. mesql
// 2 Host 127.0.0.1 or localhost 
// 3 Database name. employees
// 4 username: vagrant 
// 5 password: vagrant 

$connection = new PDO (

	'mysql:host=localhost;dbname-employees',
	'vagrant',
	'vagrant'
	);




// this is optional -- It shows that the connection was successfull.
echo $connection->getAttribute(PDO::ATTR_CONNECTION_STATUS), PHP_EOL;