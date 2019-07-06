$(document).ready(function(){


    


     
    $("#owl-demo").owlCarousel({
     
	autoPlay: 3000, //Set AutoPlay to 3 seconds
     
    items : 1,
    itemsDesktop : [1199,1],
    itemsDesktopSmall : [979,1],
	itemsTablet : [768,1],
	itemsMobile : [479,1]
     
    });
     


	"use strict";
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



	/***************************************************************************/
	/* CONTACT SECTION EXPEND FROM NAVBAR CONTACT MENU */
	/***************************************************************************/
	$(".main-navigation .contact").click(function() {
		$('#section10').collapse('show');
	});


	
	/***************************************************************************/
	/* CONTACT SECTION EXPEND FROM NAVBAR CONTACT MENU */
	/***************************************************************************/
	$(".main-navigation .contact").click(function() {
		$('#section7').collapse('show');
	});

});


	
