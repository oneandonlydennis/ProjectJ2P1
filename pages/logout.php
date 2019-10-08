<?php
  //  Haal de ladekasten leeg
  session_unset();

  //  Sla de kast $_SESSION in puin
  session_destroy();

  // Uitloggen met alert en doorsturen
  echo '<div class="alert alert-danger" role="alert">U bent succesvol uitgelogd, U wordt doorgestuurd naar de inlogpagina</div>';
  header("Location: ./index.php?content=home");
  exit();
?>