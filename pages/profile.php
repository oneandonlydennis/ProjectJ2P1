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
    <p><a href="index.php?content=webshop">Klik hier om naar de webshop te gaan</a></p>
    <p><a href="index.php?content=reserve">Klik hier om een model te reserveren</a></p>
    <p><a href="index.php?content=cancel">Klik hier om je account op te zeggens</a></p>
</div>