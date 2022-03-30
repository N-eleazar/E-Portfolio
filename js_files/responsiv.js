const url1 = "http://gat-orane/"
const url2 = "https://picsum.photos/"
const url3 = "http://lowly.fr.nf/"
const url4 = "https://jacekjeznach.com/"
const url5 = "http://127.0.0.1:5500/home/"


// Affichage sur Responviv du site par clic 
function displayProject(btnId) {
switch(btnId) {
  case "site1":
    document.getElementById("desktop").src = url1
    document.getElementById('btn1').className = "btn-info"
    document.getElementById('btn2').className = "btn-secondary"
    document.getElementById('btn3').className = "btn-secondary"
    document.getElementById('btn4').className = "btn-secondary"
    document.getElementById('btn5').className = "btn-secondary"
    break;

  case "site2":
    document.getElementById("desktop").src = url2
    document.getElementById('btn1').className = "btn-secondary"
    document.getElementById('btn2').className = "btn-info" 
    document.getElementById('btn3').className = "btn-secondary"
    document.getElementById('btn4').className = "btn-secondary"
    document.getElementById('btn5').className = "btn-secondary"
    break;

  case "site3":
    document.getElementById("desktop").src = url3
    document.getElementById('btn1').className = "btn-secondary"
    document.getElementById('btn2').className = "btn-secondary"
    document.getElementById('btn3').className = "btn-info"
    document.getElementById('btn4').className = "btn-secondary"
    document.getElementById('btn5').className = "btn-secondary"
    break; 

  case "site4":
    document.getElementById("desktop").src = url4
    document.getElementById('btn1').className = "btn-secondary"
    document.getElementById('btn2').className = "btn-secondary"
    document.getElementById('btn3').className = "btn-secondary"
    document.getElementById('btn4').className = "btn-info"
    document.getElementById('btn5').className = "btn-secondary"
    break;
  case "site5":
    document.getElementById("desktop").src = url5
    document.getElementById('btn1').className = "btn-secondary"
    document.getElementById('btn2').className = "btn-secondary"
    document.getElementById('btn3').className = "btn-secondary"
    document.getElementById('btn4').className = "btn-secondary"
    document.getElementById('btn5').className = "btn-info"
    break;
}
}