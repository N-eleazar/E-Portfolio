/**  --  **/
const button = document.getElementById('button')

button.addEventListener('click', () => {
  document.body.scrollTop = 0; 
  document.documentElement.scrollTop = 0;
  behavior: 'smooth'
})


/**  --  **/
windows.addEventListener('load', function (event) {console.log("Tout est bien chargé")});