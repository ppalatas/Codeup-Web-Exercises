<?php






?>

<!DOCTYPE html>
<html>
	<head>
		<title>Tic Tac Toe</title>
		<link rel = "stylesheet" href = "css/ticTacToe.css">
		<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		<script src = "JS/ticTacToe.js"></script>
	</head>
<body>
	<div id = "ticTacToeHeader">
		<h1 id = "title">Tic Tac Toe!</h1>
	</div>

	
	<div id = "player1">
		<div id = "player1Header"> Player 1</div>
	</div>

	<div id = "player2">
		<div id = "player2Header"> Player 2</div>
	</div>
	
	<div id = "mainContainer">
		<div data = "1" id = "moveBoxes" class = "topLeft"></div>

		<div data = "2" id = "moveBoxes" class = "topMiddle"></div>

		<div data = "3" id = "moveBoxes" class = "topRight"></div>

		<div data = "4" id = "moveBoxes" class = "midLeft"></div>

		<div data = "5" id = "moveBoxes" class = "middle"></div>

		<div data = "6" id = "moveBoxes" class = "midRight"></div>

		<div data = "7" id = "moveBoxes" class = "bottomLeft"></div>

		<div data = "8" id = "moveBoxes" class = "bottonRight"></div>

		<div data = "9" id = "moveBoxes" class = "bottomMiddle"></div>

	</div>	


</body>
</html>