$(document).ready(function(){

	/******************For making scrolling magic********************/
     $(window).scroll(function() {
		if ($(".navbar").offset().top > 50) {
			$('#custom-nav').addClass('affix');
			$(".navbar-fixed-top").addClass("top-nav-collapse");
		} else {
			$('#custom-nav').removeClass('affix');
			$(".navbar-fixed-top").removeClass("top-nav-collapse");
		}   
	});
 
	

	 


	/***************************************************************************/
	/* PARALLAX */
	/***************************************************************************/
	$(window).stellar({
		horizontalScrolling: false 
	});
	/***************************************************************************/
	/* CUSTOMIZABLE SCROLLBAR */
	/***************************************************************************/
	$("html").niceScroll({
		mousescrollstep: 40,
		cursorcolor: "#1abc9c",
		zindex: 9999,
		cursorborder: "none",
		cursorwidth: "6px",
		cursorborderradius: "none"
	});
	
	/***************************************************************************/
	/* NAVIGATION SCROLL */
	/***************************************************************************/
	$('.main-navigation').onePageNav({
		scrollThreshold: 0.2, // Adjust if Navigation highlights too early or too late
		scrollSpeed: 1000,
		scrollOffset: 60 //Height of Navigation Bar
	});


	/* DOWNLOAD AND LEARN MORE BUTTON SCROLL FROM HOME PAGE */
	$('.home-btn').localScroll({
		offset: -60 //Height of Navigation Bar
	});




});


	
