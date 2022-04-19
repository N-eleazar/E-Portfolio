jQuery(document).ready(function () {
  if (jQuery) {
    console.log('jQuery est inclus à la page.');
} else {
  console.log('jQuery n\'est  pas inclus à la page.');
}

$("h1").text();
$(".scroll").click( function ()  {
   document.body.scrollTop = 0; 
  document.documentElement.scrollTop = 0;
})
});


/**  Message après chgrt de page   **/
window.addEventListener('load', () => {
  console.log("JS: Tout est bien chargé.")
});
