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
	
	$(".carouselRight").click(function(){
		$(".carouselSize").removeClass(500);
		$(".carouselHolders").fadeOut(500);
		setTimeout(function(){
			$(".carouselSize").fadeIn(2000);
			$(".carouselHolders2").fadeIn(2000);
			$(".carouselHolders21").fadeIn(2000);
			$(".carouselHolders22").fadeIn(2000);
		}, 521);
	});
});






