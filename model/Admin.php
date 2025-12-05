<?php

namespace model;

class Admin extends User
{
    private $actionCount;

    function __construct($nom, $password)
    {
        parent::__construct($nom, $password);
        $this->actionCount = 0;
        $this->addDroit("admin");
    }

    function can($droit)
    {
        $this->actionCount++;
        if ($this->actionCount > 4) return false;
        return in_array($droit, $this->getDroits());
    }

    public function logout()
    {
        $this->actionCount = 0;
    }

}