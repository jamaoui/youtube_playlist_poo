<?php

require_once 'Salarie.php';

class Directeur extends Salarie
{
    public function getPrime()
    {
        $salaire = $this->salaire / 2;
        return round($salaire, 2);
    }
}