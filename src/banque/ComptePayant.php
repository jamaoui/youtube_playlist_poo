<?php
require_once "Compte.php";

class ComptePayant extends Compte
{
    private function moins5()
    {
        $this->solde -= 5;
    }

    public function retirer($argent)
    {
        parent::retirer($argent);
        $this->moins5();
    }

    public function deposer($argent)
    {
        parent::deposer($argent);
        $this->moins5();
    }
}