<?php
require_once("./functionality/db.php");
$id = $_GET['id'];
$sql = "SELECT * FROM artikel WHERE artikelID = ".$id."";

$result = $conn->query($sql);
$product = $result->fetchAll();
?>

<!-- <div class="productcontainer"> -->
<div class="row">
    <div class="col-6">
        <img src="./img/JeanCenter.png" alt="temporary image">
    </div>
    <div class="col-5">
        <h2>Productomschrijving</h2>
        <p><?php echo $product[0]["description"];?></p>
        <h2>Prijs</h2>
        <p>€<?php echo $product[0]["price"];?></p>
        <h2>Maat</h2>
        <p><?php echo $product[0]["size"];?></p>
        <h2>Op voorraad</h2>
        <p><?php echo $product[0]["amount"];?></p>

        <button type="button" name="order" id="order" 
        class="btn btn-primary" btn-lg btn-block">Bestellen</button>


</div>