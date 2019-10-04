<form action="./functionality/signupscript.php" method="post" class="signupform">
    <div class="form-group">
        <label for="username">Gebruikersnaam</label>
        <input type="text" name="username" class="form-control" id="username" placeholder="Example input">
    </div>
    <div class="form-group">
        <label for="email">Email Adres</label>
        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="password">Wachtwoord</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="password2">Herhaal Wachtwoord</label>
        <input type="password" name="password2" class="form-control" id="password2" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary">Registreer!</button>
</form>