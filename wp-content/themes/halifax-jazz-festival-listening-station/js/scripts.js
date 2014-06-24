jQuery(function($){
	$("#page-wrap").wrapInner("<table cellspacing='30'><tr>");
	$(".post-inner").wrap("<td>");


	$(".survey-arrow").on("click", function(e){
		e.preventDefault();
		$(this).parent().next().css("display", "block");
	});
	$("img.close").on("click", function(e){
		e.preventDefault();
		$(".artist-bio").css("display", "none");
	});

	$(".various").fancybox({
		maxWidth	: 800,
		maxHeight	: 600,
		fitToView	: false,
		width		: '70%',
		height		: '70%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});
});

