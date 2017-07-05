<?php
include("php/connect.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){
  $error = "";

  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $nome = mysqli_real_escape_string($conn, $_POST['nome']);
  $cognome= mysqli_real_escape_string($conn, $_POST['cognome']);
  $citta = mysqli_real_escape_string($conn, $_POST['citta']);
  $provincia = mysqli_real_escape_string($conn, $_POST['provincia']);
  $username = mysqli_real_escape_string($conn, $_POST['username']);

  $sql = "INSERT INTO utenti (nome, cognome, citta, provincia, email, password, username)
          VALUES ('$nome', '$cognome', '$citta', '$provincia', '$email' , '$password', '$username')";
  $result = mysqli_query($conn, $sql);
  echo $result;
  // Se è presente l'utente, count è uguale ad 1
  if($result) {
     $_SESSION['login_email'] = $email; // Salvo l'email nell'array di sessione
     header("Location: home.php"); // Redirect a bacheca.php
  }else {
     $error = "Email e/o password invalidi.";
     echo "$error";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registrazione</title>
  <!-- Link al CSS -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i,900,900i" rel="stylesheet">
</head>
<body>

  <div class="container">
    <h2>Registrati e inizia subito a giocare!</h2>
    <form action="register.php" method="post">
      <ul class="flex-outer">
        <li>
          <label for="nome">Nome</label>
          <input type="text" name="nome" id="nome" placeholder="Inserisci il tuo nome">
        </li>
        <li>
          <label for="cognome">Cognome</label>
          <input type="text" name = "cognome" id="cognome" placeholder="Inserisci il tuo cognome">
        </li>
        <li>
          <p>Età</p>
          <ul class="flex-inner">
            <li>
              <input type="checkbox" id="fifteen-to-nineteen">
              <label for="fifteen-to-nineteen">15-19</label>
            </li>
            <li>
              <input type="checkbox" id="twenty-to-twentynine">
              <label for="twenty-to-twentynine">20-29</label>
            </li>
            <li>
              <input type="checkbox" id="thirty-to-thirtynine">
              <label for="thirty-to-thirtynine">30-39</label>
            </li>
            <li>
              <input type="checkbox" id="forty-to-fortynine">
              <label for="forty-to-fortynine">40-49</label>
            </li>
          </ul>
        </li>
        <li>
          <label for="citta">Città</label>
          <input type="text" name="citta" id="citta" placeholder="Inserisci la tua città">
        </li>
        <li>
          <label for="provincia">Provincia</label>
          <input type="text" name="provincia" id="provincia" placeholder="Inserisci la provincia (sigla)">
        </li>
        <li>
          <label for="username">Username</label>
          <input type="text" name="username" id="username" placeholder="Inserisci il tuo username">
        </li>
        <li>
          <label for="email">Email</label>
          <input type="email" name="email" id="email" placeholder="Inserisci la tua e-mail">
        </li>
        <li>
          <label for="password">Password</label>
          <input type="password" name="password" id="password" placeholder="Inserisci la tua password">
        </li>
        <li>
          <button type="submit">Registrati</button>
        </li>
      </ul>
    </form>
  </div>



</body>
</html>
