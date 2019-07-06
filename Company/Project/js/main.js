$(document).ready(function(){
	$("#slider").owlCarousel({
	 
	autoPlay: 5000, //Set AutoPlay to 3 seconds
	 
	items : 2,
	itemsDesktop : [1199,2],
	itemsDesktopSmall : [979,2]
	 
	});
	
	
	$("#click_function").click(function(){
		$(".signing_form").fadeToggle(500);
							
	});
	$("#click_function2").click(function(){
		$(".signing_form").fadeToggle(500);
							
	});
	$("#click_function3").click(function(){
		$(".signing_form").fadeToggle(500);
							
	});

	$(".hide_map").click(function(){
		$(".map").fadeToggle(500);
	
	});
	
	
	$('#myTab a').click(function (e) {
	  e.preventDefault()
	  $(this).tab('show')
	})
	
});
