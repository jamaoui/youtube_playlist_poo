<?php

class Perso
{
    // Attributs
    private $nom;
    private $hp;
    private $puissance;

    // Méthodes
    public function __construct($nom, $hp, $puissance)
    {
        $this->nom = $nom;
        $this->hp = $hp;
        $this->puissance = $puissance;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getHp()
    {
        return $this->hp;
    }

    /**
     * @param mixed $hp
     */
    public function setHp($hp)
    {
        $this->hp = $hp;
    }

    /**
     * @return mixed
     */
    public function getPuissance()
    {
        return $this->puissance;
    }

    /**
     * @param mixed $puissance
     */
    public function setPuissance($puissance)
    {
        $this->puissance = $puissance;
    }

    public function hit()
    {
        $deqa = rand(0, 20);
        $this->hp -= $deqa;
        echo $this->nom . " Jat fih deqa dial " . $deqa;
    }

    public function __toString()
    {
        return "Nom : " . $this->nom . ", HP : " . $this->hp . "%" . ", Puissance : " . $this->puissance;
    }
}