<?php
  include("php/connect.php");
  session_start();

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $error = "";

    // E-mail e password inviati dal form di login
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT id FROM utenti WHERE email = '$email' and password = '$password'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    // Se è presente l'utente, count è uguale ad 1
    if($count == 1) {
       $_SESSION['login_email'] = $email; // Salvo l'email nell'array di sessione
       header("Location: home.php"); // Redirect a bacheca.php
    }else {
       $error = "Email e/o password invalidi.";
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Homepage</title>
  <!-- Link al CSS -->
  <link rel="stylesheet" href="css/style.css">
  <script type="text/javascript" src="js/indexJS.js"></script>
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i,900,900i" rel="stylesheet">
</head>
<body>

  <div class="hero">
    <!-- Menu bar -->
    <div id="nav-bar">
      <img src="img/logo.png" class="nav-logo">
    	<ul>
        <li id="nav-login-btn"><a href="#">Accedi</a></li>
    		<li><a href="#about">Chi siamo</a></li>
    		<li><a href="#faqs">FAQs</a></li>
    		<li><a href="#contacts">Contatti</a></li>
    	</ul>
    </div>

    <!-- Login Modal -->
    <div class="login-modal" id="login-modal">
      <!-- Modal Content -->
      <div class="login-modal-content">
        <!-- Modal Header -->
        <div class="login-modal-header">
          <span class="close">&times;</span>
          <h2>Accedi al tuo account</h2>
        </div>
        <!-- Login Form -->
        <div class="login-modal-body">
          <form action="" method="POST">

            <ul class="flex-outer">
              <li>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Inserisci la tua e-mail">
              </li>
              <li>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Inserisci la tua password">
              </li>
              <li>
                <button type="submit">Login</button>
              </li>
            </ul>
          </form>
        </div>
      </div>
    </div>

    <div class="hero-content"> <!-- Div con contenuto principale -->
      <h1>Progetto</h1> <!-- Titolo -->
      <h3>Partecipa alle partite nella tua zona!</h3> <!-- Sottotitolo -->
      <a class="button" onclick="showRegistrationPanel()">Inizia</a> <!-- Call to Action: invito a registrarsi -->
      <div id="registrationPanel">  </div>
    </div>
  </div>

  <div id="info">
    <!-- 1. Scegli lo sport -->
    <h2>Scegli lo sport che preferisci</h2>
    <div class="info-container">
      <div class="info-box">
        <img src="img/icons/soccer.png" class="info-icon">
        <p>Calcio</p>
      </div>
      <div class="info-box">
        <img src="img/icons/volley.png" class="info-icon">
        <p>Pallavolo</p>
      </div>
      <div class="info-box">
        <img src="img/icons/rugby.png" class="info-icon">
        <p>Rugby</p>
      </div>
      <div class="info-box">
        <img src="img/icons/basketball.png" class="info-icon">
        <p>Basket</p>
      </div>
    </div>

    <!-- 2. Scegli il campo -->
    <h2>Scegli il campo più vicino a te</h2>
    <div class="info-container">
      <div class="info-box">
        <img src="img/icons/football-field.png" class="info-icon no-rounded">
        <p>Campo da calcio</p>
      </div>
      <div class="info-box">
        <img src="img/icons/basketball-court.png" class="info-icon no-rounded">
        <p>Campo da basket</p>
      </div>
    </div>

    <!-- 3. Imposta il numero di giocatori -->
    <h2>Imposta il numero di giocatori</h2>
    <div class="info-container">
      <div class="info-box">
        <img src="img/icons/team.png" class="info-icon">
        <p>Squadra 1</p>
      </div>
      <div class="info-box">
        <img src="img/icons/team.png" class="info-icon">
        <p>Squadra 2</p>
      </div>
    </div>
  </div>

  <div id="about" class="about">
    <h2>Chi siamo</h2>
    <img src="img/default.jpg" class="about-img">
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
      Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
      Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
  </div>

  <script type="text/javascript">
    // Prelevo il riferimento alla modal
    var modal = document.getElementById('login-modal');
    // Prelevo il riferimento al pulsante che aprirà la modal
    var btn = document.getElementById("nav-login-btn");
    // Prelevo il riferimento allo <span> che chiude la modal
    var span = document.getElementsByClassName("close")[0];
    // Prelevo riferimento per lo startSlideShow
    var backgroundImageTarget = document.getElementsByClassName("hero")[0];
    //Informazione per la posizione delle foto (slideShow)
    var imageArray =["img/main_bg.jpg",'img/pallavolo.jpg','img/basket.jpg'];

    // Quando l'utente clicca sul pulsante, apre la modal
    btn.onclick = function() {
      modal.style.display = "block";
    }

    // Quando l'utente clicca sullo <span> (x), chiude la modal
    span.onclick = function() {
      modal.style.display = "none";
    }

    // Quando l'utente clicca al di fuori della modal, la chiude
    window.onclick = function(event) {
      if (event.target == modal) {
          modal.style.display = "none";
      }


    }



    // Fa partire lo slideShow
    startSlideShow(backgroundImageTarget,imageArray,0,imageArray.length);


  </script>
</body>
</html>
