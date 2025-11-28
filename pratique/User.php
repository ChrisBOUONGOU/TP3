<?php

namespace pratique;

use pratique\Guest;

class User extends Guest
{

    function __construct($nom, $password)
    {
        parent::__construct($nom, $password);
        $this->addDroit("user");

    }

}