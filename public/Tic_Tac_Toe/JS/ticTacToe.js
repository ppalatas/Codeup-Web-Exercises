$(document).ready(function(){
	"use strict"; 


var squares = ["topLeft", "topMiddle", "topRight", "midRight", "midLeft", "middle", "bottomLeft", "bottomMiddle", "bottomRight"];

var computersMove = [];

var playersMove = [];

//write a function that is a jQuery link that says "click here to start" 
function start(){

}


function player1Move(){
	//player one clicks on a box and it inputs an "X" in that box 
	$("#moveBoxes").click(function(){
		$(this).addClass("player1Move");
	
		playersMove.push($(this).attribute("data"));
	});


	//return the users move into an array stored as an index
	//cross reference with an if statement saying that if the computers 
	//move is the same as the users move[i] to get a random square again
}


player1Move();
console.log (playersMove);

function computerAnimate(element){
	$(element).addClass("player2Move");
}

function randomTurn(){
	return math.floor(math.random() * 8);
}

randomTurn();

function computersMove(){
	//cross reference with an if statement saying that if the computers 
	//move is the same as the users move[i] to get a random square again
	var RandomMove = randomTurn();

	var randomSquare = squares[RandomMove];

	computersMove.push(randomSquare);


	var i = 0;

	var intervalId = setInterval(function()){

		switch(computersMove[i]){
			case "topLeft":
				computerAnimate(".topLeft");
				break;
			case "topMiddle":
				computerAnimate(".topMiddle");
				break;
			case "topLeft":
				computerAnimate(".topRight");
				break;
			case "midLeft";
				computerAnimate(".midLeft");
				break;
			case "middle":
				computerAnimate(".middle");
				break;
			case "middleRight"
				computerAnimate(".midRight");
				break;
			case "bottomLeft"
				computerAnimate(".bottomLeft");
				break;
			case "bottomMiddle"
				computerAnimate(".bottomMiddle");
				break;
			case "bottomRight"
				computerAnimate(".bottomRight");
					break;
		}

		for ()
		if(i !== )
	}



	

}

});
