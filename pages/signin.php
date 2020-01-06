<form action="./functionality/signinscript.php" method="post" class="signupform">
    <?php
    if(isset($_SESSION['errormsg'])) {
        $errormsg = $_SESSION['errormsg'];
    }
    else{
        $errormsg = "";
    }
    echo $errormsg;
    if(isset($_SESSION['errormsg'])){
        unset($_SESSION['errormsg']);
    }
    ?>
    <div class="form-group">
        <label for="username">Gebruikersnaam</label>
        <input type="text" name="username" class="form-control" id="username" placeholder="Example input">
    </div>
    <div class="form-group">
        <label for="password">Wachtwoord</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary">Log in!</button>
</form>