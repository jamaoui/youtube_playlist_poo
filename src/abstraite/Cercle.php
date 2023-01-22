<?php
require_once "Forme.php";

class Cercle extends Forme
{
    private $rayon;

    public function __construct($rayon)
    {
        $this->rayon = $rayon;
    }

    public function surface()
    {
        $surface = $this->rayon * $this->rayon * M_PI;
        return $surface;
    }
}