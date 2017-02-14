		'use strict';

		var luckyNumber = Math.floor(Math.random()* 6)

		var receipt = 60;

		var total = receipt - discount;

 		var discount = 0;

		switch (luckyNumber) {

			case 0:
			console.log ("Sorry, you don't get a discount!" + discount);
			break;		

			case 1:
			var discount = receipt * .10;
			var total = receipt - discount;
			console.log ("You won a 10% discount!!" + "Your new total is $" + total);
			break;

			case 2:
			var discount = receipt * .25;
			var total = receipt - discount;
			console.log ("You won a 25% discount!!"  +  "Your new total is $" + total);
			break;

			case 3:
			var discount = receipt * .35;
			var total = receipt - discount;
			console.log ("You won a 35% discount!!"  +  "Your new total is $" + total);
			break;

			case 4:
			var total = receipt - discount;
			console.log ("You won a 50% discount!!"  +  "Your new total is $" + total);
			break;

			case 5:
			var discount = 1;
			console.log ("Congratulations, you have been randomly selected for an all expense paid trip!!!!!!!!!");
			break;
		}

		var luckyNumber2 = Math.floor(Math.random()* 12)

			var month = "month";

			switch (luckyNumber2) {

				case 1:
				console.log("January");
				break;

				case 2:
				console.log ("February");
				break;

				case 3:
				console.log ("March");
				break;

				case 4:
				console.log ("April");
				break;

				case 5:
				console.log ("May");
				break;

				case 6:
				console.log ("June");
				break;

				case 7:
				console.log ("July");
				break;
				
				case 8 :
				console.log ("August");
				break;

				case 9:
				console.log ("September");
				break;

				case 10:
				console.log ("October");
				break;

				case 11:
				console.log ("November");
				break;

				case 12:
				console.log ("December");
				break;

			}
















