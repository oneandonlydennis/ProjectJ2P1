<?php
  // Hier worden constanten gedefinieerd. Een constante kun je niet veranderen.
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "jeancenter";

  // We maken contact met de database
  $conn = mysqli_connect($servername, $username, $password, $dbname);
?>