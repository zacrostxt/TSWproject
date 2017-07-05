<?php
  include "php/session.php";
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Homepage</title>
    <!-- ICONS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Link al CSS -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/headerStyle.css">
  <link rel="stylesheet" href="css/homeStyle.css">
  <!-- LINK AL JS -->
  <script type="text/javascript" src="js/homeJS.js"></script>
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i,900,900i" rel="stylesheet">
</head>
<body>

<?php

  include("php/header.php");

?>

<div id="homeHeader">

</div>

<menu id="homeMenu">

  <ul>
    <li class="menuLink menuLinkActive" value="showUpContainer1">Partite Prenotate </li>
    <li class="menuLink" value="showUpContainer2"> Successi </li>
    <li class="menuLink" value="showUpContainer3"> Foto </li>
  </ul>


</menu>






<div id="showUpContainer1" class="showUpContainer" style="display:flex">

  <div class="rowForEntry">

    <div class="calendarImageBox tooltip">

        <img src="img/icons/calendarIcon.png" />
        <div class="tooltipDiv">

          <div> Ore  21:00 </div>
          <div> Giorno  21/07/2017</div>
          <div> Loco  Salerno </div>

        </div>


        <span> 21 </span>



     </div>

    <div class="infoBox">
      <span> Ore  21:00 </span>
      <span> Giorno  21/07/2017</span>
      <span> Loco  Salerno </span>
    </div>



    <div class="crossDiv">

      <div class="crossTooltip">
          <i class="fa fa-close"></i>
          <p> Sicuro di voler abbandonare l'evento?</p>
          <input type="button" value="Conferma"/>
      </div>

        <img src="img/icons/redCross.svg" alt="delete"/>
    </div>


  </div>



</div>

<div id="showUpContainer2" class="showUpContainer" style="background-color:yellow"> </div>
<div id="showUpContainer3" class="showUpContainer" style="background-color:blue"> </div>








<script type="text/javascript">
 var menuLink = document.getElementsByClassName('menuLink');
 var crossDiv = document.getElementsByClassName('crossDiv');
var crossDivCross = crossDiv[0].getElementsByClassName('fa');



for (var i = 0; i < menuLink.length;i++){
  menuLink[i].onclick = menuLinkClick;
}

for (var i = 0; i < crossDiv.length;i++){
  //var crossDivCross = crossDiv.getElementsClassName('fa');
  var crossDivCross = crossDiv[i].getElementsByClassName("fa-close")[0];


  crossDivCross.onclick = function(){
    crossDivCrossClick(this);
  };

  crossDiv[i].onclick = function(){
    crossDivClick(this);
  };



}


</script>





</body>
</html>
