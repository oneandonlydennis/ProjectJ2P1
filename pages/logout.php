<?php
  //  Haal de ladekasten leeg
  session_unset();

  //  Sla de kast $_SESSION in puin
  session_destroy();

  // Uitloggen met alert en doorsturen
  header("Location: ./index.php?content=home");
  exit();
?>