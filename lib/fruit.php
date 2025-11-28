<?php
require_once "taxeTrait.php";
//pas de parent commun à tous les objets, mais il y a
// des méthodes magiques qui font l'équivalent
class Fruit
{
    // Properties
    private $name; // les attributs on une visibilité et il faut les déclaré
    private $prix;
    const CONSTANTE_DE_CLASSE = "Ceci est une constante de classe";

    public function __construct($name, $prix) // le nom __construct est obligatoire pour déclarer un constructeur
    {
        $this->name = $name;  //notez que ceul le this prend un $
        $this->prix = $prix;
//        $this->patate = 56;  //on ne plus créer des attributs dynamiquement -> DEPRECATED
    }

    public function __toString() // la méthode __toString equivalent du toString en Java.
    {
        return "name : {$this->name}, prix : {$this->prix}";
    }

// Methods
    public function setName($name)
    {
        $this->name = $name; // le this est obligatoire!
    }

    public function getName()
    {
        return $this->name;
    }

    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function calculePrix()
    {
        return $this->prix;
    }



    use taxeTrait;
}