<?php
include("db.php");
include("functions.php");
$account = $_POST['id'];
$amount = $_POST['amount'];
$id = $_POST["id"];

$sql = "INSERT INTO bestelling (amount, accountID, artikelID) values ($amount, $account, $id)";

$result = $conn->query($sql);
var_dump($sql);

if ($result) {
    echo 'gereserveerd';
} else {
    echo "dumbass";
}