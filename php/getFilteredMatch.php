<?php
  include('connect.php');

  $q = $_GET['q'];
  $filtro = $_GET['filtro'];
  $sql = "SELECT * FROM Partite WHERE $filtro = '".$q."'";
  $result = mysqli_query($conn, $sql);

  while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    // Data evento
    $table = "<div class='evento'>";
    $date = dateExtract($row["Data"]);
    $table += "<div class='evento-data'>".$date."</div>";
    // Informazioni su evento
    $table += "<div class='evento-info'>";
    $table += "<h2>Organizzatore: ".$row["Organizzatore"]."</h2>"; // Organizzatore
    $table += "Partita di ".$row["Sport"]."<br>"; // Sport
    $table += "Luogo: ".$row["Luogo"]."<br>"; // Luogo
    $table += "".$row["NumPartecipanti"]." partecipanti<br>"; // NumPartecipanti
    $table += "Max. Partecipanti: ".$row["MaxPartecipanti"]."<br>"; // MaxPartecipanti
    $table += "</div>"; // chiude evento-info
    $table += "</div>"; // chiude evento
  }

  return $table;

 ?>
