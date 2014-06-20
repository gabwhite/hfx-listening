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
});

