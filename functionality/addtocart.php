<?php
include("db.php");
include("functions.php");
$account = $_POST['account'];
$amount = $_POST['amount'];
$id = $_POST["id"];

$sql = "INSERT INTO bestelling (amount, accountID, artikelID) values ($amount, $account, $id)";

$result = $conn->query($sql);
var_dump($sql);

if ($result) {
    header("Location: ../index.php?content=webshop");
} else {
    header("Location: ../index.php?content=contact");
}