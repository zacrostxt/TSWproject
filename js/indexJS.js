//
function showRegistrationPanel(){

  var registrationPanel = document.getElementById("registrationPanel");
  var xmlhttp;
xmlhttp = new XMLHttpRequest();
/*  if (window.XMLHttpRequest) {
    // code for modern browsers
    xmlhttp = new XMLHttpRequest();
 } else {
    // code for old IE browsers
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}*/

xmlhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
       // Typical action to be performed when the document is ready:
       registrationPanel.style.display= "block";
       registrationPanel.innerHTML = xmlhttp.responseText;
    }

};


xmlhttp.open("GET", "register.php", true);
xmlhttp.send();

}
//background-image: url('../img/main_bg.jpg');
//var imageArray =["img/main_bg.jpg",'img/pallavolo.jpg'];



function startSlideShow(target,imageArray,pos,length){

  setTimeout(function(){
    target.classList.toggle('fade');


    setTimeout(function(){
      target.style.backgroundImage = "url('" + imageArray[pos] + "')";
      target.classList.toggle('fade');
  }, 10);

    if(pos+1 >= length){
      pos = 0;
    }else { pos++;}

    startSlideShow(target,imageArray,pos,length);

}, 6000);

}
