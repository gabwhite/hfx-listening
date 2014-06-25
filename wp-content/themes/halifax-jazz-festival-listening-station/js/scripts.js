jQuery(function($){
	$("#page-wrap").wrapInner("<table cellspacing='30'><tr>");
	$(".post-inner").wrap("<td>");


	$(".artist-info").on("click", function(e){
		e.preventDefault();
		$(this).parent().next().css("display", "block");
	});
	$(".close-btn").on("click", function(){
		$(".artist-bio").css("display", "none");
	});

	$('.fancybox-media').fancybox({
		openEffect  : 'none',
		closeEffect : 'none',
		helpers : {
			media : {}, 
			overlay: {
     			 locked: false
    			}
		}
	});
});

