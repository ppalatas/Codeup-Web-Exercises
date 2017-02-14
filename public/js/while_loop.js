	'use strict';
	

	var i = 2;

	while (i <= 65536)  {
		console.log(i);
		i *= 2;

		
	}


	var allCones = Math.floor(Math.random() * 50) + 50;
    
   do  {
    	var soldCones = Math.floor(Math.random() * 5) + 1;
		allCones = allCones - soldCones;

		if (allCones < soldCones) {

			console.log("We don't have enough cones to sell");
		} else {
			var allCones = allCones - soldCones;
			console.log (allCones);
		}
	} while (allCones > 0);


		

    
   





