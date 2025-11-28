<?php

require_once 'view/header.php';
require_once 'view/footer.php';

function afficheAjoute($informations, $error = false)
{
    afficheHeader($informations);
    ?>
        <form action="/index.php/saisirInfo" method="post">
    <form action="/index.php/saisirInfo"
          method="post">

        <label for="info">Nouvelle information</label><br>
        <input type="text" name="info" placeholder="info"
               value=<?= array_key_exists('oldValue', $informations)? $informations['oldValue']:"" ?>
        ><br>
        <?php if ($error) {
            echo "<span style='color:red'>{$error}</span><br>";
        } ?>
        <button type="submit" name="ajoute">Ajouter</button>
        <button type="submit" name="annule">Annuler</button>
    </form>
<!--    <script src="../js/valide.js" defer ></script>-->
    <?php
    afficheFooter($informations);
}

