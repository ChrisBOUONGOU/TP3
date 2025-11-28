<?php

class Modele
{
    private $info;

    public function __construct()
    {
        $this->info = [];
        $this->info[] = "première info";  // infos de base
        $this->info[] = "deuxieme info";  // infos de base
    }

    public function __toString()
    {
        $chaine = "";
        foreach ($this->info as $value) {
            $chaine .= $value . " ";
        }
        return $chaine . "br";
    }

    public function addInfo($nouvelleInfo)
    {
        $this->info[] = $nouvelleInfo;
    }


    public function getInfo()
    {
        return $this->info;
    }

    public function setInfo($info)
    {
        $this->info = $info;
    }
}