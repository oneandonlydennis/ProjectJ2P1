<?php
    include("db.php");
    include("./functions.php");

    $email = sanitize($_POST['email']);

    $sql = "SELECT * FROM  `account` WHERE `email` = '$email'";
    var_dump($sql);
    $result = mysqli_query($conn, $sql);
    $userArr = mysqli_fetch_assoc($result);
    var_dump($userArr);
    if ($result) {
        $username = $userArr['username'];
        $to = $email;
        $subject = "Herstel uw wachtwoord voor Jeancenter.com";
        $message = "<!DOCTYPE html>
                    <html>
                      <head>
                        <style>
                            // Insert style for
                            // the email here
                        </style>
                        <title>Herstellen</title>
                      </head>
                      <body>
                        <h1>Beste ".$username.",</h1>
                        <p>U kunt via de onderstaande link uw account activeren.<br>
                        <a href='http://www.jeancenter.com/index.php?content=recoverpass&id=" . $id."'>activatielink</a><br>
                        Met vriendelijke groet,<br>
                        Jeancenter
                      </body>                    
                    </html>";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8"."\r\n";
        $headers .= "From: noreply@jeancenter.com"."\r\n";


        mail( $to, $subject, $message, $headers);
    }
        else{
            echo "Deze email is bij ons niet bekent. vul alstublieft de juiste email in.";
        }
?>