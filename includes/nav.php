<div id="container">
      <nav class="navbar navbar-expand-sm navbar-dark">
          <a class="navbar-brand" href="#">
              <img src="./img/JeanCenterInvertBlue.png" height="100" alt="logo">
          </a>
          <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
              aria-expanded="false" aria-label="Toggle navigation"></button>

              <div class="collapse navbar-collapse" id="collapsibleNavId">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <?php

if(isset($_SESSION['id'])){
    switch($_SESSION['userrole']){
        case 'customer':
        /*TODO: fix de positie van de username*/
        echo "<li class='nav-item'>
            <a class='name' href='#'>Hallo ". $_SESSION['username']."</a>
        </li>
        <li class='nav-item'>
            <a class='nav-link' href='index.php'>Webshops</a>
        </li>
        <li class='nav-item'>
            <a class='nav-link' href='index.php?content=contact'>Contact</a>
        </li>
        <li class='logout'> 
            <a class='nav-link' href='index.php?content=logout'>
            Uitloggen
            </a>
        ";
          break;
          default:
          echo "test";
          break;
    }
}else{
    echo '
        <li class="nav-item">
            <a class="nav-link" href="index.php">Webshop <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php?content=contact">Contact</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Inloggen</a>
            <div class="dropdown-menu" aria-labelledby="dropdownId">
                <a class="dropdown-item" href="./index.php?content=signin">Inloggen</a>
                <a class="dropdown-item" href="./index.php?content=signup">Registreren</a>
            </div>
        
</div>';
}
?>
</li>
    </ul>
  </div>
          
      </nav>    