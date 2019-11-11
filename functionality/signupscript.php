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
        $to = $email;
        $subject = "Uw activatielink voor www.jeancenter.com";
        $message = "<!DOCTYPE html>
                    <html>
                      <head>
                        <style>
                            // Insert style for
                            // the email here
                        </style>
                        <title>Activeer</title>
                      </head>
                      <body>
                        <h1>Beste ".$username.",</h1>
                        <p>U kunt via de onderstaande link uw account activeren.<br>
                        <a href='http://www.jeancenter.com/index.php?content=login&id=" . $id."'>activatielink</a><br>
                        Met vriendelijke groet,<br>
                        Jeancenter
                      </body>                    
                    </html>";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8"."\r\n";
        $headers .= "From: noreply@jeancenter.com"."\r\n";


        mail( $to, $subject, $message, $headers);

        echo '<div class="alert alert-success" role="alert">U bent geregistreerd. Wij hebben u een mail gestuurd naar dit adres. Klik daarin op de activatielink om uw registratie te voltooien.</div>';
        header("Location: ../index.php?content=signup");
      } else {
        echo '<div class="alert alert-danger" role="alert">Er is iets misgegaan tijdens het registreren. probeer het nogmaals</div>';
        echo $email."<BR>";
        echo $sql;
      }
    }
  }
?>