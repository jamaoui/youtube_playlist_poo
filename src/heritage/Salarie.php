<?php
require_once 'Personne.php';

class Salarie extends Personne
{
    protected $salaire;
    protected $poste;

    public function __construct($prenom, $nom, $age, $salaire, $poste)
    {
        parent::__construct($prenom, $nom, $age);
        $this->salaire = $salaire;
        $this->poste = $poste;
    }

    public function getSalaire()
    {
        return $this->salaire;
    }

    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;
    }

    public function getPoste()
    {
        return $this->poste;
    }

    public function setPoste($poste)
    {
        $this->poste = $poste;
    }

    public function getPrime()
    {
        $salaire = $this->salaire / 3;
        return round($salaire, 2);
    }

    public function getSalaireTotal()
    {
        return $this->salaire + $this->getPrime();
    }

}