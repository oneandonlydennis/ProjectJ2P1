<?php
  include("db.php");
  include("functions.php");

  $email = $_POST["email"];
  $username = $_POST["username"];

  if ( empty($_POST["email"])) {
    echo '<div class="alert alert-warning" role="alert">U heeft geen e-mailadres ingevoerd. Dit is een verplicht veld. Probeer het nogmaals</div>';
  } else {



    $sql = "SELECT * FROM `account` WHERE `email` = '$email'";

    $result = $conn->query($sql);

    if ( $result->rowCount() == 1 ) {
      echo '<div class="alert alert-info" role="alert">Het door u ingevoerde e-mailadres bestaat al. Kies een nieuw e-mailadres</div>';
    } else {

      $password = $_POST["password"];
      $password2 = $_POST["password2"];

      $pw = password_hash($password, PASSWORD_BCRYPT);
    if($password != $password2){
        echo '<div class="alert alert-info" role="alert">De ingevoerde wachtwoorden komen niet overheen.</div>';
    }else{
      $sql = "INSERT INTO `account` (`accountID`,
                                `username`,
                                `email`,
                                `password`,
                                `activated`,
                                `userrole`)
                        VALUES  (NULL,
                                '$username',
                                '$email',
                                '$pw',
                                'no',
                                'customer')";

      $result = $conn->query($sql);

      $id = $conn->LastInsertId();
    }
      if ($result) {
        header("Location: ../index.php?content=signup");
          echo '<div class="alert alert-success" role="alert">U bent geregistreerd. Wij hebben u een mail gestuurd naar dit adres. Klik daarin op de activatielink om uw registratie te voltooien.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Er is iets misgegaan tijdens het registreren. probeer het nogmaals</div>';
        echo $email."<BR>";
        echo $sql;
      }
    }
  }
?>