<?php

require_once 'view/header.php';
require_once 'view/footer.php';


function afficheInscription($informations, $error = false){
    afficheHeader($informations);
    ?>
    <div class="center-wrapper">
        <form action="/index.php/affiche" method="post" class="formInc">

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nom</label>
                <input type="text" name="nom" class="form-control" placeholder="Nom"
                       value=<?= array_key_exists('oldValue', $informations)? $informations['oldValue']:"" ?>
                ><br>
                <?php if ($error) {
                    echo "<span style='color:red'>{$error}</span><br>";
                } ?>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Mot de passe"
                       value=<?= array_key_exists('oldValue', $informations)? $informations['oldValue']:"" ?>
                >
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Confirmer mot de passe</label>
                <input type="password" class="form-control" name="plainpassword" id="exampleInputPassword1" placeholder="Confirmer Mot de passe"
                       value=<?= array_key_exists('oldValue', $informations)? $informations['oldValue']:"" ?>
                >
            </div>

            <button type="submit" name="inscription" class="btn btn-primary">Inscription</button>
        </form>
    </div>
    <?php
    afficheFooter($informations);

}
