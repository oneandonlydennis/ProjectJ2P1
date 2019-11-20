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

    <!-- <?php
            $sql = "SELECT * FROM products WHERE catagory = 'heren' AND subcatagory = 'schoenen';";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if ($resultCheck > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                   // echo $row['title'] . "<br>";
                
                   echo '
                   <div class="row topmargin">
                     <div class="col-sm">
                           <div class="card" style="width: 22rem;">
                            <img src="' . $row['imageUrl'] . '" class="card-img-top product-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">' . $row['title'] . '</h5>
                                    <a href="index.php?content=product&id=' . $row['id'] . '" class="btn btn-secondary">View</a>
                                </div>
                          </div> 
                     </div>
                   </div>
                    ';
                }
            }
        ?> -->