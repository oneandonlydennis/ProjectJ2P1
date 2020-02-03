<?php
include("../functionality/db.php");
include("../functionality/functions.php");
$accountid = $_POST["id"];
$artikelid = $_POST['artikelid'];
$artikelamount = $_POST['artikelamount'];

$array_artamount = explode(",", $artikelamount);

var_dump($array_artamount);

$array_artid = explode(",", $artikelid);

var_dump($array_artid);
//for($i=0; $i<sizeof($array_artid); $i++) {
//    $sql = "UPDATE artikel SET amount = (artikel.amount - $array_artamount[$i]) WHERE artikel.artikelID = $array_artid[$i]";
//    $result = $conn->query($sql);
//}

$sql = "DELETE FROM bestelling WHERE accountID = $accountid";
$result = $conn->query($sql);
if($result){
    echo "bestelling gelukt!";
    header("Location: http://www.ing.nl");
}
else{
    Header("Location: ../index.php?content=oversight");
}