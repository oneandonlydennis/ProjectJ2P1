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

        <form action="./functionality/addtocart.php" method="post">
            <label for="amount">Hoeveelheid:</label>
            <select name="amount" id="amount">
                <?php
                for($i=0;$i<$product[0]["amount"]; $i++){
                    $y = $i+1;
                    echo '<option value="' . $y .'">' . $y .'</option>';
                }
                ?>
            </select>
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <input type="hidden" name="account" value="<?php echo $_SESSION['id']?>">
        <button type="submit" name="order" id="order"
        class="btn btn-dark" btn-lg btn-block">Bestellen</button>
        </form>


</div>