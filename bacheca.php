<?php
   include("php/session.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bacheca</title>
  <!-- Link al CSS -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i,900,900i" rel="stylesheet">
</head>
<body>

  <h1>Bentornato, <?php echo $login_session; ?></h1>
  <h2><a href="php/logout.php">Esci</a></h2>

</body>
</html>
