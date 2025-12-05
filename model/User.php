<?php

class User
{
    private $nom;
    private $droit;
    private $date_inscription;

    public function __construct($nom, $droit, $date_inscription){
        $this->nom = $nom;
        $this->droit = $droit;
        $this->date_inscription = $date_inscription;
    }

    public function addInfo($nouveauUser)
    {
        $this->users[] = $nouveauUser;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function getDroit()
    {
        return $this->droit;
    }
    public function setDroit($droit)
    {
        $this->droit = $droit;
    }
    public function getDateInscription()
    {
        return $this->date_inscription;
    }
    public function setDateInscription($date_inscription)
    {
        $this->date_inscription = $date_inscription;
    }




}