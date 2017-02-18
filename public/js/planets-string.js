(function(){
    "use strict";

    var planetsString = "Mercury|Venus|Earth|Mars|Jupiter|Saturn|Uranus|Neptune";
    var planetsArray;

    // TODO: Convert planetsString to an array, save it to planetsArray.
    var planetsArray = planetsString.split('|');
    console.log(planetsArray);

    // TODO: Create a string with <br> tags between each planet. console.log() your results.
    //       Why might this be useful?
   var planetsString = planetsArray.join("<br>");
   console.log(planetsString);

    // Bonus: Create a second string that would display your planets in an undordered list.
    //        You will need an opening AND closing <ul> tags around the entire string, and <li> tags around each planet.
    //        console.log() your results.

    var lowerCase = " a b c d e f g h i j k l m n o";
    console.log(lowerCase); 
    lowerCase.upperCase(); 


    var output = "A B C D E F G H I J K L M N O P"; 

    var lowerCase = input.upperCase([0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14 , 15]);
    console.log(lowerCase);


})();


