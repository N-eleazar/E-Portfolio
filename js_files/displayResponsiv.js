const url1 = "http://gat-orane/"
const url2 = "https://picsum.photos/"
const url3 = "http://evaluation-01/"
const url4 = "http://192.168.1.56:5502/"


// recuperer valeur bouton appuyé
function displayProject(btnId) {
switch(btnId) {
  case "site1":
    document.getElementById("desktop").src = url1
    document.getElementById('btn1').className = "btn-info"
    document.getElementById('btn2').className = "btn-primary"
    document.getElementById('btn3').className = "btn-primary"
    document.getElementById('btn4').className = "btn-primary"
    break;

  case "site2":
    document.getElementById("desktop").src = url2
    document.getElementById('btn1').className = "btn-primary"
    document.getElementById('btn2').className = "btn-info" 
    document.getElementById('btn3').className = "btn-primary"
    document.getElementById('btn4').className = "btn-primary"
    break;

  case "site3":
    document.getElementById("desktop").src = url3
    document.getElementById('btn1').className = "btn-primary"
    document.getElementById('btn2').className = "btn-primary"
    document.getElementById('btn3').className = "btn-info"
    document.getElementById('btn4').className = "btn-primary"
    break; 

  case "site4":
    document.getElementById("desktop").src = url4
    document.getElementById('btn1').className = "btn-primary"
    document.getElementById('btn2').className = "btn-primary"
    document.getElementById('btn3').className = "btn-primary"
    document.getElementById('btn4').className = "btn-info"
    break;

}
}
