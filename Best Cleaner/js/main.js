$(document).ready(function(){

     
    $("#owl-demo").owlCarousel({
    
	// autoPlay : true,
    slideSpeed :1000,
    paginationSpeed : 1200,
	items :2,
    singleItem:true
     
    // "singleItem:true" is a shortcut for:
    // 
    // itemsDesktop : false,
    // itemsDesktopSmall : false,
    // itemsTablet: false,
    // itemsMobile : false
     
    });
	
	
	 //Sort random function
	function random(owlSelector){
	owlSelector.children().sort(function(){
	return Math.round(Math.random()) - 0.5;
	}).each(function(){
	$(this).appendTo(owlSelector);
	});
	}
	 
	$("#owl-demo-2nd").owlCarousel({
	navigation: true,
	items :4,
	navigationText: [
	"<i class='fa fa-arrow-circle-o-left'></i>",
	"<i class='fa fa-arrow-circle-o-right'></i>"
	],
	beforeInit : function(elem){
	//Parameter elem pointing to $("#owl-demo")
	random(elem);
	}
	 
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


	
