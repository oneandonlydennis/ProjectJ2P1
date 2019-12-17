<?php
  include("db.php");
  include("./functions.php");
  session_start();

  $username = $_POST["username"];
  $password = $_POST["password"];

  $sql = "SELECT * FROM  `account` WHERE `username` = '$username'";

  $result = $conn->query($sql);

  if ( $result->rowCount() == 1 ) {
    // Ga verder met de inlogprocedure
    $record = $result->fetchAll();
    $blowfish_password = $record[0]["password"];

    if ( password_verify($password, $blowfish_password)) {
      
      $_SESSION["id"] = $record[0]["accountID"];
      $_SESSION["username"] = $username;
      $_SESSION["userrole"] = $record[0]["userrole"];

      switch ($record[0]["userrole"]) {
        case 'customer':
          $errormsg = '<div class="alert alert-success" role="alert">U bent succesvol ingelogd en word nu doorgestuurd naar de hoofdpagina.</div>';      
          header("Location: ../index.php?content=profile");
        break;
        case 'manager':
          echo '<div class="alert alert-success" role="alert">U bent succesvol ingelogd. U wordt doorgestuurd naar uw administrator homepagina</div>';      
          header("Location: ../index.php?content=managerprofile");
        break;
        case 'owner':
        echo '<div class="alert alert-success" role="alert">U bent succesvol ingelogd. U wordt doorgestuurd naar uw administrator homepagina</div>';      
          header("Location: ../index.php?content=ownerpanel");
        default:
          echo '<div class="alert alert-warning" role="alert">U bent succesvol ingelogd. Maar uw gebruikersrol bestaat niet. Uwordt doorgestuurd naar de standaard homepagina</div>';      
          header("Location: ../index.php?content=webshop");
        break;
      }

      


    } else {
      // wachtwoord verkeerd
      $_SESSION['errormsg'] = '<div class="alert alert-danger" role="alert">Uw wachtwoord is niet correct, probeer het nogmaals</div>';
      header("Location: ../index.php?content=signin");
    }

  } else {
    // E-mailadres is niet bekend in database, terugsturen naar het inlogformulier
    $_SESSION['errormsg'] = '<div class="alert alert-danger" role="alert">gebruikersnaam is niet bekend, probeer het nogmaals</div>';
    header("Location: ../index.php?content=signin");
  }
?>