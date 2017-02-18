		"use strict";

		// TODO: Ask the user for their name.
		//       Keep asking if an empty input is provided.
		var userName = ""; 

		while (userName === "") {
		userName =	prompt("What is your name" + "?"); 
		}

		// TODO: Ask the user if they like pizza.
		var response = confirm ("Do you like pizza" + name + "?");
		 if (response) {
		 		alert("I like pizza too" + name + "!");

		 } else {

		 	alert("Really, I thought everyone liked pizza" + "!");
		 }

