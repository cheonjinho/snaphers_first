$(function(){
	$('.image-wrapper').each(function(){
		var a = $('.image-wrapper').index(this);
		$(this)
		.mouseenter(function(){
			$('.image-title:eq('+a+')').animate({paddingTop:"0"},300);
		}).mouseleave(function(){
			$('.image-title:eq('+a+')').animate({paddingTop:"150px"},300);
		});
	});
});
