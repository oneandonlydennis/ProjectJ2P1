<!-- <div id="carouselId" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselId" data-slide-to="0" class="active"></li>
        <li data-target="#carouselId" data-slide-to="1"></li>
        <li data-target="#carouselId" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img class="lock img-fluid" src="./img/Scherm Ontwerp.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="lock img-fluid" src="./img/Scherm Ontwerp.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="lock img-fluid" src="./img/Scherm Ontwerp.jpg" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div> -->


<?php
    require_once("./functionality/db.php");
    $sql = 'SELECT * FROM artikel';
    echo "<table>
                <thead>
                    <th>Beschrijving</th>
                    <th>Prijs</th>
                    <th>Maat</th>
                    <th>Hoeveelheid</th>
                </thead>";
    foreach($conn->query($sql) as $row){
        echo "<tr>
                <td>" . $row['description'] . "</td>
                <td>" . $row['price'] . "</td>
                <td>" . $row['size'] . "</td>
                <td>" . $row['amount'] . "</td>
            </tr>";
    }
    echo "</table>";

?>