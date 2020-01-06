<head>
    <style>
        a{
            list-style-type: none;
            color: black;
        }
        a:hover{
            list-style-type: none;
            text-decoration: none;
            color: black;
        }
    </style>
</head>
<div class="container">
    <h2>Welkom <?php echo $_SESSION['username']?></h2>
    <p>Hier kan je je profiel aanpassen, account opzeggen, of reserveringen bekijken!</p>

    <table style="width:100%">
  <tr>
    <th><img src="./img/store.gif" alt="Submit" width="320" height="320">
    <p><a href="index.php?content=webshop">Klik hier om naar de webshop te gaan</a></p></th>
    <th><img src="./img/icon_webshop.gif" alt="Submit" width="320" height="320">
    <p><a href="index.php?content=reserve">Klik hier om een model te reserveren</a></p></th>
    <th><img src="./img/trashBin.png" alt="Submit" width="320" height="320">
    <p><a href="index.php?content=cancel">Klik hier om je account op te zeggens</a></p></th>
  </tr>
</div>