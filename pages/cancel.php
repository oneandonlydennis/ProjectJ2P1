<p>Hier iets om t zeker te weten</p>

<form action="./functionality/deleteaccount.php" method="POST">
    <input type="hidden" class="form-control" name="userid" id="userid" value="<?php echo $_SESSION['id'];?>">
    <label for="cancel">Klik hier om je account te verwijderen. LET OP! Nadat je account verwijdert is kan je deze niet terugkrijgen.</label>
    <button type="submit" class="btn btn-primary">Verwijder account</button>
</form>

<?php var_dump($_SESSION); ?>