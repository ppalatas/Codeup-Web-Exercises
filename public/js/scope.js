(function() {


"use strict";

var myNameIs = 'Phillip'; // TODO: Fill in your name here.

// TODO:
// Create a function called 'sayHello' that takes a parameter 'name'.
// When called, the function should log a message that says hello from the passed in name.
function sayHello(myNameIs){
	console.log("Hello," + myNameIs + "!");
}
sayHello(myNameIs);

// TODO: Call the function 'sayHello' passing the variable 'myNameIs' as a parameter.

// Don't modify the following line
// It generates a random number between 1 and 100 and stores it in random
var random = Math.floor((Math.random()*100)+1);

console.log("Random number is:" + random);

function isOdd(numberToTest){

	(numberToTest % 2 === 1) ? console.log ("Number was odd.") : console.log("Number was even.")
}
		isOdd(random);
// TODO:
// Create a function called 'isOdd' that takes a number as a parameter.
// The function should use the ternary operator to log a message.
// The log should tell the number passed in and whether it is odd or not.

// TODO: Call the function 'isOdd' passing the variable 'random' as a parameter.
})();