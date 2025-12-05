<?php

// éléments nécessaires au fonctionnement du site
require_once 'model/modele.php';
require_once 'model/user.php';
require_once 'model/sauvegardeSession.php';

// ROUTING Détermine l'action à faire en fonction de l'URI
    // On enlève les paramètres
$uri = $_Server['REQUEST_URI'] = explode('?', $_SERVER['REQUEST_URI'])[0];//on enlève les paramètres
    //on enleve la partie connue
$uri = explode('/', $uri)[2];//on ne garde que l'uri après le site

//Récupération du modèle avec la session.
$modele = chargeModele();

$informations['titre'] = "TP3 - Chris Boukongou";
$informations['modele'] = $modele;
$informations['date'] = date('d/m/Y');

switch ($uri) {
    case ''; // s'il n'y a pas d'URI, on affiche le site
    case 'afficheConnexion':
        afficheConnexionForm($informations);
        break;
    case 'afficheInscription':
        afficheInscriptionForm($informations);
        break;
    case 'inscription':
        ajoutUser($informations);
        break;
    case 'affiche':
        affiche($informations);
        break;
    case 'afficheAjoute':
        afficheAjouteForm($informations);
        break;



}

// Enregistrement des données du modèle.
sauvegardeModele($modele);

/** Affichage de la vue principale
 * @param $modele les données/informations pour la vue
 * @return void
 */
function affiche($informations)
{
    //préparation des infos à afficher


    // on affiche la vue
    require_once 'view/affiche.php'; // on l'inclut uniquement si nécessaire
    afficher($informations);
}



/** Récupère les informations du formulaire puis les valide et finalement
 * ajoute la nouvelle information dans le modèle.
 * Relance le formulaire d'ajout si les informations sont invalides.
 * @param $modele Les données du site ou mettre la nouvelle information
 * @return void
 */
function ajouteInfo($informations)
{
    if (isset($_POST['ajoute'])) {
        //on récupère l'informtion du formulaire
        $informations['oldValue'] = $_POST['info'];

        //on valide l'information
        if (valideInfo($informations['oldValue'] )) {

            //si valide on l'ajoute dans le modele et on affiche le tout
            $informations['modele']->addInfo($informations['oldValue'] );
            affiche($informations);
        } else {
            //En cas d'erreur, on remet l'information saisie dans le formulaire
            //pour demander à l'utilisateur de les corriger
            afficheAjouteForm($informations, "info trop courte");
        }
    } else if (isset($_POST['annule'])) {
        affiche($informations);
    }

}

function ajoutUser($informations)
{
    if (isset($_POST['inscription'])) {

        $nom = $_POST['nom'] ?? "";
        $password = $_POST['password'] ?? "";
        $plainpassword = $_POST['plainpassword'] ?? "";
        //on récupère l'informtion du formulaire
        $informations['oldValue']['nom'] = $nom;
        $informations['oldValue']['password'] = $password;
        $informations['oldValue']['plainpassword'] = $plainpassword;


        $user = new User($nom, $password, date("Y-m-d H:i:s"));

        $informations['User']->save($user);
        //on valide l'information
        if (valideName($informations['oldValue'] ) || $password == $plainpassword) {

            //si valide on l'ajoute dans le modele et on affiche le tout
            $informations['User']->addInfo($informations['oldValue'] );
            affiche($informations);

        } else {
            //En cas d'erreur, on remet l'information saisie dans le formulaire
            //pour demander à l'utilisateur de les corriger
            afficheInscriptionForm($informations, "Nom trop court");
            afficheInscriptionForm($informations, "Les mots de passe ne correspondent pas");
        }
    }
}

function afficheAjouteForm($informations, $error = false)
{

    // on affiche la vue qui permet d'ajouter une nouvelle information
    require_once 'view/ajoute.php';// on l'inclut uniquement si nécessaire
    afficheAjoute($informations, $error);
}


function afficheConnexionForm($informations, $error = false)
{
    require_once 'view/connexion.php';
    afficheConnexion($informations, $error);
}

function afficheInscriptionForm($informations, $error = false)
{
    require_once 'view/inscription.php';
    afficheInscription($informations, $error);
}

/** Valide le nom reçue. Elle doit avoir au moins 2 caractèresé
 * @return bool true si le nom est valide, false sinon
 */
function valideName($info)
{
    return is_string($info) && strlen(trim($info)) > 2;
}









