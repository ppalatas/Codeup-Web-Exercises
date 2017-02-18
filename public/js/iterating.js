(function(){
    "use strict";

    // TODO: Create an array of 4 people's names using literal array notation, in a variable called 'names'.
	var names = ['Phillip', 'Cameron', 'Nick', 'Candace']; 
    // TODO: Create a log statement that will log the number of elements in the names array.
	console.log(names.length);
    // TODO: Create log statements that will print each of the names array elements individually.
    console.log('The first name is: ' + names[0]);

    console.log('The second name is: ' + names[1]); 

    console.log('The third name is: ' + names[2]); 

    console.log('The fourth name is: ' + names[3]);

    console.log("Theses are the four names in the array!");

    for (var i = 0; i <= 3; ++i){
    	console.log(names[i]);
    }

    names.forEach(function (element, index, array) {

    	var names = ['Phillip', 'Cameron', 'Nick', 'Candace']; 
    	
    	console.log('The name at index' + index + 'is' + elements);

});


