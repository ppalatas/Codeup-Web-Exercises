$(document).ready(function(){

	$('a').click(function(){
	    $('html, body').animate({
	        scrollTop: $('[name="' + $.attr(this, 'href').substr(1) + '"]').offset().top
	    }, 500);
	    return false;
	});
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
	$("#myCarousel > div > div.item.active > a.left.carousel-control").click(function(){
		$("#myCarousel > div > div.item.active > a.left.carousel-control").fadeOut("#myCarousel > div > div.item.active > img")
	});
// 	$(document).scroll(function() {
// 		var y = $(this).scrollTop();
//   		if (y < 800) {
//     		$('.portfolioContent').fadeIn(2000);
//   		} else {
//     		$('.portfolioContent').fadeOut(2000);
//   		}
// });

//chevron left selector
//#myCarousel > div > div.item.active > a.left.carousel-control

// chevron right selector 

// #myCarousel > div > div.item.active > a.right.carousel-control > span.glyphicon.glyphicon-chevron-right
});






