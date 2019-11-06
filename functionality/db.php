<?php
  // Hier worden constanten gedefinieerd. Een constante kun je niet veranderen.
  $dsn = 'mysql:dbname=jeancenter;host=localhost;charset=UTF8';
  $user = 'root';
  $pass = '';

  // We maken contact met de database
  $conn = new PDO($dsn, $user, $pass);
?>