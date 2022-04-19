/**  --  **/
const button = document.getElementById('button')

button.addEventListener('click', () => {
  document.body.scrollTop = 0; 
  document.documentElement.scrollTop = 0;
  behavior: 'smooth'
})

/**  Message après chgrt de page   **/
window.addEventListener('load', () => {
  console.log("Tout est bien chargé")
});

/* --- Popup Cookies --- 
window.addEventListener('load', () => {
  alert("Veuillez acceptez les cookies !")
}); */

/* --- Navbar Responsive --- */
function myFunction() {
  var x = document.getElementById("myTopbar");
  if (x.className === "topbar") {
    x.className += " responsive";
  } else {
    x.className = "topbar";
  }
}