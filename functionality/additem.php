<?php
include("db.php");
include("functions.php");

$description = $_POST['description'];
$price = $_POST['price'];
$size = $_POST['size'];
$amount = $_POST['amount'];

$sql = "INSERT INTO artikel (description, price, size, amount) VALUES ('$description', '$price', '$size', '$amount')";

$result = $conn->query($sql);
var_dump($sql);

if($result){
    echo 'gereserveerd';
    header("Location: ../index.php?content=webshop");
}else{
    echo "dumbass";
}