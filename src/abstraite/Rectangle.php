<?php
require_once "Forme.php";

class Rectangle extends Forme
{
    private $hauteur;
    private $largeur;

    public function surface()
    {
        return $this->hauteur * $this->largeur;
    }
}