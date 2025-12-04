<?php

require_once 'view/header.php';
require_once 'view/footer.php';


function afficheConnexion($informations, $error = false){
    afficheHeader($informations);
?>
    <form action="" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nom</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>

        <button type="submit" class="btn btn-primary">Connexion</button>
    </form>
    <?php
    afficheFooter($informations);

}

