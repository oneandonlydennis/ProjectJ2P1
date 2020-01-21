<?php
include("functionality/db.php");
include("functionality/functions.php");
if(isset($_SESSION['id'])){
    $id = $_SESSION['id'];
    $artikelid = [];
    $artikelamount = [];
}
else{
    header("Location: ../index.php?content=login");
    $id = "";
}

//$sql = "SELECT artikel.description, artikel.size, artikel.price * bestelling.amount AS prijs, bestelling.amount, artikel.artikelID FROM artikel, bestelling WHERE accountID = ".$id." AND artikel.artikelID = bestelling.artikelID";
$sql = "SELECT 
            artikel.artikelID, 
            artikel.description, 
            artikel.price, 
            artikel.size, 
            bestelling.amount
        FROM artikel 
        LEFT JOIN bestelling USING (artikelID)
        WHERE 
            artikelID IN (SELECT artikelID FROM bestelling WHERE accountID = $id)";
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
    //foreach($cart as $artikelId => $amount)
    $cart = array();
    foreach($conn->query($sql) as $row) {
        echo '<tr>
                <td>' . $row["description"] . '</td>
                <td>' . $row["size"] . '</td>
                <td>' . $row["amount"] . '</td>
                <td>€' . $row["price"]*$row["amount"] . '</td>
              </tr>';
        $total += $row["price"]*$row["amount"];
        if (!isset($cart[$row["artikelID"]])) {
            $cart = array_merge($cart, array($row["artikelID"] => $row['amount']));
        } else {
            $cart[$row["artikelID"]] = $row['amount'];
        }
;

        array_push($artikelid, $row["artikelID"]);
        array_push($artikelamount, $row['amount']);
    }

    $artikelids = implode(',', $artikelid);
    $artikelamounts = implode(',', $artikelamount);
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
    <input type="hidden" name="id" value="<?php echo $id;?>">
    <input type="hidden" name="artikelid" value="<?php echo $artikelids;?>">
    <input type="hidden" name="artikelamount" value="<?php echo $artikelamounts;?>">
    <button type="submit" class="btn btn-primary">Bestellen</button>

</form>