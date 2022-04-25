const url2 = "https://cristalid.fr/"
const url3 = "https://jacekjeznach.com/"
const url4 = "https://picsum.photos/"





$("#respBtn2").click(() => {
 console.log("site1");
 $("#respBtn2").removeClass("btn-outline-secondary").addClass("btn-outline-primary");
 $("#respBtn3").removeClass("btn-outline-secondary").addClass("btn-outline-secondary");
 $("#respBtn4").removeClass("btn-outline-secondary").addClass("btn-outline-secondary");
 $("iframe").attr("src",url2);
})
$("#respBtn3").click(() => {
  console.log("site2");
  $("#respBtn2").removeClass("btn-outline-secondary").addClass("btn-outline-secondary");
  $("#respBtn3").removeClass("btn-outline-secondary").addClass("btn-outline-primary");
  $("#respBtn4").removeClass("btn-outline-secondary").addClass("btn-outline-secondary");
  $("iframe").attr("src",url3);
 })
 $("#respBtn4").click(() => {
  console.log("site3");
  $("#respBtn2").removeClass("btn-outline-secondary").addClass("btn-outline-secondary");
  $("#respBtn3").removeClass("btn-outline-secondary").addClass("btn-outline-secondary");
  $("#respBtn4").removeClass("btn-outline-secondary").addClass("btn-outline-primary");
  $("iframe").attr("src",url4);
 })