<?php
//include 'view/header.php';
require_once 'view/header.php';
require_once 'view/footer.php';

function afficher($informations)
{
    afficheHeader($informations);
    ?>
        <h2>Liste des informations</h2>
    <div class="row">

        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"> Un titre (doit être unique)</h5>
                <p class="card-text">Un texte (au moins 4 mots)</p>
                <p>Le nom de l'utilisateur (déterminé automatiquement par le serveur)<?php
                    $monUser = new User("Chris","user","1236-5-58");
                    echo $monUser->getNom();
    
                    ?></p>
            </div>
        </div>
    </div>


    <?php
    afficheFooter($informations);
}


