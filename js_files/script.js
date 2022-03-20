const url1 = "http://gat-orane/"
const url2 = "https://picsum.photos/"
const url3 = "http://evaluation-01/"
const url4 = "http://192.168.1.56:5502/"




// Affichage sur Responviv du site par clic 
function displayProject(btnId) {
switch(btnId) {
  case "site1":
    document.getElementById("desktop").src = url1
    document.getElementById('btn1').className = "btn-info"
    document.getElementById('btn2').className = "btn-secondary"
    document.getElementById('btn3').className = "btn-secondary"
    document.getElementById('btn4').className = "btn-secondary"
    break;

  case "site2":
    document.getElementById("desktop").src = url2
    document.getElementById('btn1').className = "btn-secondary"
    document.getElementById('btn2').className = "btn-info" 
    document.getElementById('btn3').className = "btn-secondary"
    document.getElementById('btn4').className = "btn-secondary"
    break;

  case "site3":
    document.getElementById("desktop").src = url3
    document.getElementById('btn1').className = "btn-secondary"
    document.getElementById('btn2').className = "btn-secondary"
    document.getElementById('btn3').className = "btn-info"
    document.getElementById('btn4').className = "btn-secondary"
    break; 

  case "site4":
    document.getElementById("desktop").src = url4
    document.getElementById('btn1').className = "btn-secondary"
    document.getElementById('btn2').className = "btn-secondary"
    document.getElementById('btn3').className = "btn-secondary"
    document.getElementById('btn4').className = "btn-info"
    break;

}
}


// Fonction de Recup et Affichage Résolution Ecran 
function getResolution() {
  alert("Votre résolution d'écran est: " + screen.width + "x" + screen.height);
}


// Fonction Scroll To The Top 
function scrollToTop() {
  window.scrollTo({
      top: 0,
      behavior: 'smooth'
  })
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

 