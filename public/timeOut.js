Notes 

www.w3schools.com/jsref/obj_navigator.asp

sayHello() {

	console.log ("Say Hello"); 

}


setTimeout (SayHello, 1000);

setTimeout(function() {
	alert (" 2.5 seconds elapsed since we set the timeout");
}, 2500);





clearing a timer is clearTimeout(3)



<script>

var timeoutId = setTimeout (function () {
	var answer = confirm ("Do you want to end the timer?");
	if (answer) {

		clearTimeout(timeoutId);
	}
}, 1000);







</script> 