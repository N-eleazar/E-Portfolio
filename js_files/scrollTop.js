/**  --  **/




/* --- Navbar Responsive --- */
function myFunction() {
  var x = document.getElementById("myTopbar");
  if (x.className === "topbar") {
    x.className += " responsive";
  } else {
    x.className = "topbar";
  }
}



/*  ---  Javascript  ---  */
/**  Message après chgrt de page   **/
window.addEventListener('load', () => {
  console.log("JS: Tout est bien chargé");
});

/*  Scroll Top  */
const button = document.getElementById('button')

button.addEventListener('click', () => {
  document.body.scrollTop = 0; 
  document.documentElement.scrollTop = 0;
  behavior: 'smooth'
})


/*  ---  CODE JQUERY  ---  */
$(document).ready(() {
  if (jQuery) {
    console.log('jQuery est inclus à la page')
} else {
  console.log('jQuery n\'est  pas inclus à la page')
}
})

$(.scroll).click(() => {
  //
})