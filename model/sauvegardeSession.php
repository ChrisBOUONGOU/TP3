<?php

session_start();
function chargeModele()
{

    if (!isset($_SESSION['modele'])) {
        $_SESSION['modele'] = serialize(new Modele()); //l améthode est récursive, elle saisit aussi les attributs des attributs...
    }
    return unserialize($_SESSION['modele']);
}

function sauvegardeModele($modele)
{
    $_SESSION['modele'] = serialize($modele);
}