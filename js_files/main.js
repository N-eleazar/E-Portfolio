jQuery(document).ready(function () {
  if (jQuery) {
    console.log('jQuery est inclus à la page.');
} else {
  console.log('jQuery n\'est  pas inclus à la page.');
}

// BTN Scroll To Top
$("h1").text();
$(".scroll").click( function () {
   document.body.scrollTop = 0; 
  document.documentElement.scrollTop = 0;
})

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};

});  //Ready jQuery.


function myFunction() {
    var navbar = document.getElementById("myNavbar");
  if (document.body.scrollTop > 5 || document.documentElement.scrollTop > 5) { 
      $("nav").css("position","fixed").css("top","0").css("left","0").css("background","orange").css("width","100%").css("z-index","1");
  }
  else if (document.body.scrollTop < 2 || document.documentElement.scrollTop < 5) {
      $("nav").css("position","relative").css("top","0").css("background","wheat");
  }
}