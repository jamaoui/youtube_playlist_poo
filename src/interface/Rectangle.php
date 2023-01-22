<?php
require_once "Forme.php";
require_once "InterfaceX.php";

class Rectangle implements Forme
{
    private $hauteur;
    private $largeur;

    public function surface()
    {
        return $this->hauteur * $this->largeur;
    }
}