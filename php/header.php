<?php

echo  '<header id="menuContainer">
  <div class="menuBox">
      <div class="box">
        <h3> Home </h3>
      </div>

      <div class="box">
        <h3> Eventi </h3>
      </div>

      <div class="box">
        <h3> Foto </h3>
      </div>

  </div>

  <div id="userInfoPanel">

    <h4>Bentornato , <span> '.  $login_session .'
      <div>
        <a href="#">Fai qualcosa</a>
        <a href="php/logout.php">Log-out</a>
      </div>
    </span> </h4>
    <img class="profileImage" src="" alt="Photo"/>

  </div>


</header>';

?>
