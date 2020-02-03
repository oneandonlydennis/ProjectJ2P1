<?php
include("db.php");
include("functions.php");

$description = $_POST['description'];
$price = $_POST['price'];
$size = $_POST['size'];
$amount = $_POST['amount'];
$gender = $_POST['gender'];
$color = $_POST['color'];

$sql = "SELECT * FROM reservation";

foreach($conn->query($sql) as $row){
    if($row['sex'] == $gender && $row['color'] == $color && $row['size'] == $size){
        $sql2 = "SELECT * FROM account WHERE accountID = ".$row['accountID'];
        $result = $conn->query($sql2);
        $record = $result->fetchAll();
        echo "Stuur een mail naar: ".$record[0][2] . " dat de broek die dit persoon heeft gereserveerd gevonden is!";
        exit();
    }
}



$sql3 = "INSERT INTO artikel (description, price, size, amount) VALUES ('$description', '$price', '$size', '$amount')";

$result = $conn->query($sql3);


if($result){
    echo 'gereserveerd';
    header("Location: ../index.php?content=webshop");
}else{
    header("Location: ../index.php?content=additem");
}