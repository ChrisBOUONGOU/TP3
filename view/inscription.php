<?php

require_once 'view/header.php';
require_once 'view/footer.php';


function afficheInscription($informations, $error = false){
    afficheHeader($informations);
    ?>

    <form method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nom</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Confirmer mot de passe</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>

        <button type="submit" class="btn btn-primary">Inscription</button>
    </form>
    <?php
    afficheFooter($informations);

}
