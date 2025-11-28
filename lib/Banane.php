<?php
// Comme en Java, il y a un seul parent possible
class Banane extends Fruit
{
    private $quantite;

    function __construct($prixUnitaire, $quantite)
    {
        parent::__construct("banane", $prixUnitaire);// pas de super
        $this->quantite = $quantite;
    }

    public function calculePrix()
    {
        return parent::calculePrix() * $this->quantite; // toujours pas de super!
    }

}