<?php
require_once "Personne.php";

class Etudiant extends Personne
{
    private $note;

    public function __construct($nom, $prenom, $age, $note)
    {
        parent::__construct($prenom, $nom, $age);
        $this->note = $note;
    }

}