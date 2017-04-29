<?php

require __DIR__ . '/db_connection.php';
require __DIR__ . '/Input.php';
require __DIR__ . '/Park.php';


function pageController(){

	$data = [];

	$data['errors'] = [];

	if(!empty($_POST)){
		$park = new Park();

		try
		{ 
			$park->name = Input::getString('name');

		} catch (Exception $e){
			$data['errors'][] = $e->getMessage();
		}

		try
		{
			$park->location = Input::getString('location');
		} catch (Exception $e){
			$data['errors'][] = $e->getMessage();

		}

		try
		{
			$park->description = Input::getString('description');
		} catch (Exception $e) 	{
			$data['errors'][] = $e->getMessage();
		}

		try
		{
			$park->date_established = Input::getNumber('date_established');
		} catch(Exception $e) {
			$data['errors'][] = $e->getMessage();
		}

		try
		{
			$park->area_in_acres = Input::getNumber('area_in_acres');
		} catch (Exception $e){
			$data['errors'][] = $e->getMessage();
		}

		if(empty($data['errors'])){
			$park->insert();
		}
	}
	

	if(isset($_GET['page'])){
		$data['page'] = $_GET['page'];

	} else {

		$data['page'] = 1;
	}
	$data['parks'] = Park::paginate($data['page'], 4);

	if($data['page'] < 1 || !is_numeric($data['page'])){
		$data['page'] = 1;
		header ("location: national_parks.php?page=1");
	} elseif ($data['page'] >= 3 || !is_numeric($data['page'])){
		$data['page'] = 3;
		echo "Last Page";
	}
	return $data;
}
extract(pageController());


?>
<!DOCTYPE html>
<html>
	<head>
		<title>National Parks</title>
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">
		<link rel = "stylesheet" href = "css/national_parks.css">
	</head>
<body>
	<center>
		<h1>National Parks</h1>
		<table>
			<tr>
				<th>Name</th>
				<th>Location</th>
				<th>Description</th>
				<th>Year Est.</th>
				<th>Area In Acres</th>
			</tr>

			<?php foreach($parks as $park => $rows) : ?>
				<tr>
					<td><?= $rows->name ?></td>
					<td><?= $rows->location ?></td>
					<td><?= $rows->description ?></td>
					<td><?= $rows->date_established ?></td>
					<td><?= $rows->area_in_acres ?></td>
				</tr>
			<?php endforeach; ?>
		</table>
		<form method = "GET" action ="#">
		
			<?php if ($page == 1){
				  echo "<button type = 'submit' name = 'page' value = '" . ($page +1) . "'>Next</button>";
				} else {
					echo "<button type = 'submit' name = 'page' value = '" . ($page -1) . "'>Previous</button>";
					echo "<button type = 'submit' name = 'page' value = '" . ($page +1) . "'>Next</button>";
				}
			?>
			
		</form>
		<br>
		<br>
		<h3>Add A National Park</h3>
		<br>
			<ul>
				<?php foreach($errors as $error): ?>
					<li><?= $error; ?></li>
				<?php endforeach; ?>
			</ul>
		<form method = "POST" action = "national_parks.php">
			<div class = "containerInput">
				<label class = "label" placeholder = "Name">Name: </label>
				<input class = "input input1" name = "name" type = "text">
					<br>

				<label class = "label" placeholder = "Location">Location: </label>
				<input class = "input" name = "location" type = "text">
					
				<label class = "label" placeholder = "description">Description: </label>
				<input class = "input" name = "description" type = "text"><br>
					
				<label class = "label" placeholder = "date_established">Date Est: </label>
				<input class = "input" name = "date_established" type = "text"><br>
					

				<label class = "label" placeholder = "area_in_acres">Area In Acres: </label>
				<input class = "input" name = "area_in_acres" type = "text">

				<button class = "button" name ="submit" type = "submit">Add Park</button>
			</div>

		</form>
	</center>
</body>
</html>
