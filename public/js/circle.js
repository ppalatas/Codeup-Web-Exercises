(function() {
    "use strict";

    var circle = {
        radius: 3,


       getArea: function () {
            // TODO: complete this method
            // hint: area = pi * radius^2
             
             var area = Math.PI * Math.pow(this.radius, 2);
            return area; // TODO: return the proper val
        },


        logInfo: function (doRounding) {
            var area = this.getArea();
            // TODO: complete this method.
                if (doRounding) { 
                    area = Math.round(this.getArea());
                    console.log("Area of a radius " + this.radius + Math.round(this.radius));
                    this.getArea();

                } else {
                        console.log("Area of a circle with a radius " + this.radius + "is" + this.getArea);
            // If doRounding is true, round the result to the nearest integer.
            }
        }
    };

    // log info about the circle
    console.log("Raw circle information" + area + radius);
    circle.logInfo(false);
    console.log("Circle information rounded to the nearest whole number");
    circle.logInfo(true);

    console.log("=======================================================");
    // TODO: Change the radius of the circle to 5.

    // log info about the circle
    console.log("Raw circle information");
    circle.logInfo(false);
    console.log("Circle information rounded to the nearest whole number");
    circle.logInfo(true);
})();
