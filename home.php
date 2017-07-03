<?php
  include "php/session.php";
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Homepage</title>
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
    <li class="menuLink" value="showUpContainer1">Partite Prenotate </li>
    <li class="menuLink" value="showUpContainer2"> Successi </li>
    <li class="menuLink" value="showUpContainer3"> Foto </li>
  </ul>


</menu>

<div id="showUpContainer1" class="showUpContainer" style="background-color:red"> </div>
<div id="showUpContainer2" class="showUpContainer" style="background-color:yellow"> </div>
<div id="showUpContainer3" class="showUpContainer" style="background-color:blue"> </div>
























<script type="text/javascript">
 var menuLink = document.getElementsByClassName('menuLink');


for (var i = 0; i < menuLink.length;i++){
  menuLink[i].onclick = menuLinkClick;
}

</script>





</body>
</html>
