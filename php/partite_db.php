<?php
/* dichiariamo alcune importanti variabili per collegarci al database */
include ("connect.php");
include ("utils.php");

$sqlquery = "SELECT * FROM Partite";
$result = mysqli_query($conn, $sqlquery);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>

    <form class="filter-form" action="getFilteredMatch.php" method="GET">
      <input type="text" class="filter-value" name="value" placeholder="Luogo|Sport|Data" ><br>
      <input type="radio" class="filter-radio" name="search" value="Luogo"> Luogo
      <input type="radio" class="filter-radio" name="search" value="Sport"> Sport
      <input type="radio" class="filter-radio" name="search" value="Data"> Data
      <button type="submit" class="filter-button" value="Filtra" onclick="filterMatch(this.value, this.search)">Filtra</button>
    </form>

    <?php

    echo "<div id='eventi' class='eventi'>";
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
      // Data evento
      echo "<div class='evento'>";
      $date = dateExtract($row["Data"]);
      echo "<div class='evento-data'>".$date."</div>";
      // Informazioni su evento
      echo "<div class='evento-info'>";
      echo "<h2>Organizzatore: ".$row["Organizzatore"]."</h2>"; // Organizzatore
      echo "Partita di ".$row["Sport"]."<br>"; // Organizzatore
      echo "Luogo: ".$row["Luogo"]."<br>"; // Organizzatore
      echo "".$row["NumPartecipanti"]." partecipanti<br>"; // Organizzatore
      echo "Max. Partecipanti: ".$row["MaxPartecipanti"]."<br>"; // Organizzatore
      echo "</div>";
      echo "</div>";
    }
    echo "</div>";
    ?>

    <script type="text/javascript">
      function filterMatch(val, filtro) {
        console.log(val+" "+filtro);
        if (val == "") {
            document.getElementById("eventi").innerHTML = "";
            return;
        } else {
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("eventi").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "getFilteredMatch.php?q="+val+"&filtro="+filtro, true);
            xmlhttp.send();
        }
      }
    </script>
  </body>
</html>
