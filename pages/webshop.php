<?php
    require_once("./functionality/db.php");
    var_dump($_SESSION);
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
        </div>
        <div class="col-6">
        <img src="./img/JeanCenter.png">
        </div>
        </div>
    ';
    }
    echo "</div>";
?>