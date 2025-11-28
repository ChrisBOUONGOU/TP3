<?php
trait TaxeTrait {
    public  function calculeTaxe(){
        return $this->prix + $this->prix * 0.15;  // l'attribut prix doit être présent mais rien ne le vérifie !
    }
}

