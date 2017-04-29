$(document).ready(function(){
	
	"use strict";

	var squares = ["topLeft", "topMiddle", "topRight", "midLeft", "middle", "midRight", "bottomLeft", "bottomMiddle", "bottomRight"];
	var computersMove = [];
	var playersMove = [];
	
	//write a function that is a jQuery link that says "click here to start" 
	function start(){
	
	}
	
	
	function player1Move(){
	
		//player one clicks on a box and it inputs an "X" in that box 
		var playersChoice = squares[player1Move];

		//cycle through the class options for the boxes and add the class when the player clicks on one 
		$(".topLeft, .topMiddle, .topRight, .midRight, .midLeft, .middle, .bottomLeft, .bottomMiddle, .bottomRight").click(function(){
			$(this).addClass("player1Move");

			
			// push the players box clicked to the array of playersMove.
			playersMove.push($(this).attr("data"));
			setTimeout (function(){
				computersTurn();
			}, 1000);

			console.log('This is the players move: ' + playersMove);
			console.log($(this).attr("data"));

		});
	
	}
	
	player1Move();

	
	function computerAnimate(element){
		$(element).addClass("computersMove");
	}
	
	function randomTurn(){
		return Math.floor(Math.random() * 9);
	}

	
	randomTurn();
	
	function computersTurn(){
		//cross reference with an if statement saying that if the computers 
		//move is the same as the users move[i] to get a random square again
		var RandomMove = randomTurn();
	
		var randomSquare = squares[RandomMove];
	
		//add the computers randomSquare to the computersMove array
		computersMove.push(randomSquare);
	
	
		
	
		// var intervalId = setTimeout(function(){
	
			switch(randomSquare){
				case "topLeft":
					computerAnimate(".topLeft");
					break;
				case "topMiddle":
					computerAnimate(".topMiddle");
					break;
				case "topRight":
					computerAnimate(".topRight");
					break;
				case "midLeft":
					computerAnimate(".midLeft");
					break;
				case "middle":
					computerAnimate(".middle");
					break;
				case "midRight":
					computerAnimate(".midRight");
					break;
				case "bottomLeft":
					computerAnimate(".bottomLeft");
					break;
				case "bottomMiddle":
					computerAnimate(".bottomMiddle");
					break;
				case "bottomRight":
					computerAnimate(".bottomRight");
						break;
			}
			
			

			//cross reference with an if statement saying that if the computers 
			//move is the same as the users move[i] to get a random square again
			
			if(randomSquare == playersMove){
			// 	computersTurn();
			// }else {
				$(this).animate(function(){
					$(this).addClass("computerMove");
					
			
					computersMove.push($(this).attribute("data"));
				});
			// }
		}
	}
});

