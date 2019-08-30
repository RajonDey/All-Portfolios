
/*
  ....................................
        Main JS Codes are there 
  ....................................
*/

// Side Nav JS
    // 1st- Click, Shop Link 
    function openShopNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }
    function closeShopNav() {
        document.getElementById("mySidenav").style.width = "0";
    }


// Sticky
	window.onscroll = function() {myFunction()};

	var navbar = document.getElementById("topbar");
	var sticky = navbar.offsetTop;

	function myFunction() {
	  if (window.pageYOffset >= sticky) {
	    navbar.classList.add("sticky")
	  } else {
	    navbar.classList.remove("sticky");
	  }
	}






// Back to TOP function
    $('.top').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 1000);
        return false;
    });


// Top Head Logo
(function($){

    $(window).scroll(function() {    
            var scroll = $(window).scrollTop();

             //>=, not <=
            if (scroll >= 300) {
                //clearHeader, not clearheader - caps H
                $(".head-logo").addClass("logoStick");
            }else{
                 $(".head-logo").removeClass("logoStick");
            }
            
        });

})(jQuery)
