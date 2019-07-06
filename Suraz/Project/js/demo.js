$(function () {
	$('.loader').loader();

	var progr = 1;
	setInterval(function () {
		$('.loader').loader('setProgress', ++progr);
	}, 100);
	
	/* =================================
	   LOADER                     
	=================================== */
	// makes sure the whole site is loaded
	$(window).load(function() {
		// will first fade out the loading animation
		$(".loader").delay(9500).fadeOut();
		//then background color will fade out slowly
		$(".preloader").delay(9500).fadeOut("slow");
	});
});