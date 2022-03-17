const url1 = "http://gat-orane/"
const url2 = "https://picsum.photos/"
const url3 = "http://evaluation-01/"


// recuperer valeur bouton appuyé
function displayProject(btnId) {
switch(btnId) {
  case "site1":
    document.getElementById("desktop").src = url1
    document.getElementById("tablet").src = url1
    document.getElementById('btn1').className = "btn btn-info"
    document.getElementById('btn2').className = "btn btn-primary"
    document.getElementById('btn3').className = "btn btn-primary"
    break;

  case "site2":
    document.getElementById('desktop').src = url2
    document.getElementById("tablet").src = url2
    document.getElementById('btn1').className = "btn btn-primary"
    document.getElementById('btn2').className = "btn btn-info" 
    document.getElementById('btn3').className = "btn btn-primary"
    break;

  case "site3":
    document.getElementById('desktop').src = url3
    document.getElementById("tablet").src = url3
    document.getElementById('btn1').className = "btn btn-primary"
    document.getElementById('btn2').className = "btn btn-primary"
    document.getElementById('btn3').className = "btn btn-info"
    break; 

}
}
