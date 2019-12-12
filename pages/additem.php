<form action="./functionality/additem.php" method="post">
    <label for="description">Beschrijving: </label>
    <textarea name="description" id="description" cols="30" rows="10"></textarea>
    <label for="price">Prijs: </label>
    <input type="number" name="price" id="price">
    <label for="size">Maat: </label>
    <input type="number" name="size" id="size">
    <label for="amount">Hoeveel: </label>
    <input type="number" name="amount" id="amount">
    <button type="submit" class="btn btn-primary">Voeg product toe</button>
</form>