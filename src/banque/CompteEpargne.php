<?php
require_once "Compte.php";

class CompteEpargne extends Compte
{
    private static $tauxInteret = 6;

    public function calculerInteret()
    {
        $this->solde += ($this->solde * static::$tauxInteret / 100);
    }
}