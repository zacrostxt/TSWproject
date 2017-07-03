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
