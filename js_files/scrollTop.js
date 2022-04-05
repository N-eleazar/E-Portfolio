/**  --  **/
const button = document.getElementById('button')

button.addEventListener('click', () => {
  document.body.scrollTop = 0; 
  document.documentElement.scrollTop = 0;
  behavior: 'smooth'
})

/**  Message après chgargement complète de page  **/
window.addEventListener('load', () => {
  console.log("Tout est bien chargé")
});

window.addEventListener('load', () => {
  alert("Veuillez acceptez les cookies !")
});