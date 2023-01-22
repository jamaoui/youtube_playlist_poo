<?php

class Cercle
{
    private $rayon;
    const pi = 3.1415;

    public function __construct($rayon)
    {
        $this->rayon = $rayon;
    }

    public function getRayon()
    {
        return $this->rayon;
    }

    public function setRayon($rayon)
    {
        $this->rayon = $rayon;
    }

    public function surface()
    {
        return static::pi * $this->rayon * $this->rayon;
    }
}