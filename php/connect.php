<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $db_name = "progetto_db";

  // Creo la connessione al database
  $conn = mysqli_connect($servername, $username, $password, $db_name);

  // Check connection
  if (!$conn) {
    die("Connessione fallita: ".mysqli_connect_error());
  }

  
?>
