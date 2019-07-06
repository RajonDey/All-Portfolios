
/*
  ....................................
        Main JS Codes are there 
  ....................................
*/


// This function for making the sticky navbar
window.onscroll = function() {myFunction()};

var menubar = document.getElementById("menu-bar");
var sticky = menubar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    menubar.classList.add("sticky")
  } else {
    menubar.classList.remove("sticky");
  }
}