'use strict';

// todo:
// Create an array of objects that represent books.
// Each book should have a title and an author.
// The book author should be an object with a firstName and lastName.
// Be creative and add at least 5 books to the array
// var books = [todo];

	var books = [

		{
			"title" : "The Lord Of The Rings",
			"author" : {
				"firstName" : "J.R.R.",
				"lastName" : "Tolkien"
			}
		},
	

		{
			"title" : "aslkd;fhj",
			"author" : {
				"firstName" : "John",
				"lastName" : "Doe"
			}
		},

		{
			"title" : "sdfhjsdiogfh",
			"author" : {
				"firstName" : "jan",
				"lastName" : "tdflkjsdf"
			}
		},

		{
			"title" : "haji died during a failed jihad",
			"author" : {
				"firstName" : "haj",
				"lastName" : "mator"
			}
		},

		{
			"title" : "taliban fucks goats",
			"author" : {

				"firstName" : "dead",
				"lastName"	: "talib"
			}
		}

		]; 


// log out the books array
	console.log(books);


// todo:
// Loop through the array of books using .forEach and print out the specified information about each one.
// start loop here

books.forEach(function (element, index){

    console.log("Book #" + (index + 1));
    console.log("Title: " + (element.title));
    console.log("Author: " + (element.author.firstName +  " " + element.author.lastName));
    console.log("---");
});

// end loop here