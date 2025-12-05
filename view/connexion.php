<?php

require_once 'view/header.php';
require_once 'view/footer.php';


function afficheConnexion($informations, $error = false){
    afficheHeader($informations);
?>
   <div class="center-wrapper">
        <form action="" method="post" class="formCon">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nom</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="nomc" placeholder="Nom">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="passc" placeholder="Mot de passe">
            </div>

            <button type="submit" class="btn btn-primary" name="subc">Connexion</button>
        </form>
   </div>
    <?php
    afficheFooter($informations);

}

