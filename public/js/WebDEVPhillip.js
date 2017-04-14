$(document).ready(function(){

	$("#columns").hover(function(){
		$("#columns").addClass("columnsHover");
	}, function(){
		$("#columns").removeClass("columnsHover");
	});

	$(".column2").hover(function(){
		$(".column2").addClass("columnsHover");
	}, function(){
		$(".column2").removeClass("columnsHover");
	});

	$(".column3").hover(function(){
		$(".column3").addClass("columnsHover");
	}, function(){
		$(".column3").removeClass("columnsHover");
	});

// 	$(document).scroll(function() {
// 		var y = $(this).scrollTop();
//   		if (y < 800) {
//     		$('.portfolioContent').fadeIn(2000);
//   		} else {
//     		$('.portfolioContent').fadeOut(2000);
//   		}
// });
});

// #myCarousel > a.right.carousel-control




