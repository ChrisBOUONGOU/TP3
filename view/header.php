<?php
function afficheHeader($informations)
{
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> <?=$informations['titre']?></title>
        <link href="../css/styles.css" rel="stylesheet">
    </head>
    <body>
<div class="ligne">
    <div class="gauche">
        <input type="text" placeholder="Rechercher...">
        <button>Recherche</button>
    </div>

    <h1><header><?= $informations['titre'] ?></header></h1>

    <div>
        <button onclick="window.location.href='http://localhost:81/index.php/affiche'">Page d'accueil</button>
        <button onclick="window.location.href='http://localhost:81/index.php/afficheConnexion'">Connexion</button>
        <button onclick="window.location.href='http://localhost:81/index.php/afficheInscription'">Inscription</button>
    </div>
</div>

    <?php
}
