<?php

namespace model;

class Guest
{
    private $droits = ["guest"];
    private $password;
    private $name;



    function __construct($nom="guest", $password="")
    {
        $this->name = $nom;
        $this->password = $password;
    }



    protected function getDroits(){
        return $this->droits;
    }

    function can($droit){
        return in_array($droit, $this->droits);
    }

    public function __toString(): string
    {
        return $this->getName();
    }

    protected function addDroit($droit){
        $this->droits[] = $droit;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    public function logout(){
        // rien pour le guest
    }

}