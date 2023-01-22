<?php

class Compte
{
    protected $solde;
    protected $code;
    private static $dernierCode = 0;

    public function __construct($solde = NULL)
    {
        $this->code = ++static::$dernierCode;
        $this->solde = $solde;
    }

    public function getSolde()
    {
        return $this->solde;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function __toString()
    {
        $solde = $this->solde ?? 0;
        return $solde . " MAD";
    }

    public function deposer($argent)
    {
        $this->solde += $argent;
    }

    public function retirer($argent)
    {
        $this->solde -= $argent;
    }
}