<?php
include("functionality/db.php");
include("functionality/functions.php");
if(isset($_SESSION['id'])){
    $id = $_SESSION['id'];
}
else{
    header("Location: ../index.php?content=login");
    $id = "";
}

$sql = "SELECT artikel.description, artikel.size, artikel.price * bestelling.amount AS prijs, bestelling.amount FROM artikel, bestelling WHERE accountID = ".$id." AND artikel.artikelID = bestelling.artikelID";

$result = $conn->query($sql);
$total = 0;
?>
<table class="table">
    <thead>
    <th>Omschrijving</th>
    <th>grootte</th>
    <th>hoeveelheid</th>
    <th>prijs</th>
    </thead>
<?php
    foreach($conn->query($sql) as $row) {
        echo '<tr>
                <td>' . $row["description"] . '</td>
                <td>' . $row["size"] . '</td>
                <td>' . $row["amount"] . '</td>
                <td>€' . $row["prijs"] . '</td>
              </tr>';
        $total += $row["prijs"];
    }
?>
    <tfoot>
    <tr>
        <td>totaal: </td>
        <td>
        </td>
        <td>
        </td>
        <td class="right"><b>€<?php echo $total; ?>,-</b></td>
    </tr>
    </tfoot>
</table>
<form action="./functionality/order.php" method="post">
    <input type="hidden" name="id" value="<?php $id?>">
    <button type="submit" class="btn btn-primary">Bestellen</button>
</form>
