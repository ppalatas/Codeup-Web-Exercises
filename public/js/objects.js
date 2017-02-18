(function(){
    "use strict";

    // TODO: Create person object
    // var person = todo;
    var person = {};
    person.name = "Phillip";
    person.lastName = "Palatas"; 
    person.weight = "195 lbs"; 
    person.height = " 6 ft"; 
    person.age = "26"; 


    person.sayHello = function(){

    	alert ("Hello my name is Phillip Palatas!");
    };

    person.sayHello();

    person.logWeight = function () {

    	alert(" I weigh 195 lbs.");

    };

    person.logWeight();

    person.logAge = function(){

    	alert("I am 26 years old!");

    };

    person.logAge();


    person.logHeight = function(){ 

    	alert(" I am 6 feet tall!");
    };

    person.logHeight();



    // TODO: Create firstName and lastName properties in your person object; assign your name to them

    // TODO: Add a sayHello method to the person object that
    //       alerts a greeting using the firstName and lastName properties

    // Say hello from the person object.
    // person.sayHello();
})();
