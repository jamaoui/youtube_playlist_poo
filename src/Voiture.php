<?php

class Voiture
{
    // Attributs
    private $marque;
    private $couleur;

    // Méthodes
    public function __construct($brand, $color)
    {
        $this->marque = $brand;
        $this->couleur = $color;
    }

    public function __toString()
    {
        return "Voiture : " . $this->marque . " , Couleur: " . $this->couleur;
    }

    // GET/SET

    // LECTURE (GET)

    public function getMarque()
    {
        return $this->marque;
    }

    public function getCouleur()
    {
        return $this->couleur;
    }

    public function setMarque($marque) {
        $this->marque = $marque;
    }

    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    }

}