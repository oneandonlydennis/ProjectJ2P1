<?php
    require_once("./functionality/db.php");
    $sql = 'SELECT * FROM artikel';
    echo "<div class='row'>";
    foreach($conn->query($sql) as $row){
        echo '
        <div class="articlerow col-6">
        <div class="col-6">
        <p>'.$row["description"].'</p>
        <p>€'.$row["price"].'</p>
        <p>Beschikbaar: '.$row["amount"].'</p>
        <p>Maat: '.$row["size"].'</p>
        <p> <a name="product" id="product" class="btn btn-primary" 
        href="index.php?content=product&id='.$row["artikelID"].'" role="button">Bekijk product</a>
        </div>
        <div class="col-6">
        <img src="./img/pantsproduct'.$row["artikelID"].'.png" alt="pantsproduct'.$row["artikelID"].'.png">
        </div>
        </div>
    ';
    }
    echo "</div>";
?>