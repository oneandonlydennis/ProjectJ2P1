<?php
include("../functionality/db.php");
include("../functionality/functions.php");
$accountid = $_POST["id"];

$sql = "UPDATE artikel SET amount = artikel.amount - bestelling.amount WHERE artikel.artikelID = bestelling.artikelID";

$result = $conn->query($sql);

if($result){
    echo "works";
}
else{
    echo $sql;
}