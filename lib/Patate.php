<?php

class Patate
{
    public  function calculePrix()
    {
        return 1.12;
    }

    public function __toString(): string
    {
        return "patate";
    }
}