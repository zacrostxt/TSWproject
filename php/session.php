<?php
   include("connect.php");
   session_start();

   $email_check = $_SESSION['login_email'];

   $ses_sql = mysqli_query($conn, "select username, email from utenti where email = '$email_check'");

   $row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);

   $login_session = $row['username'];
  
   if(!isset($_SESSION['login_email'])){
      header("Location: index.php");
   }
?>
