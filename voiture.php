<?php
require_once 'src/Voiture.php';


// Instanciation

$voiture1 = new Voiture("Fiat","rouge");
$voiture2 = new Voiture("Dacia","bleu");
$voiture1->setCouleur("Jaune");
echo $voiture1->getCouleur();
//var_dump($voiture1->__toString());
//echo "<br>";
//var_dump($voiture2->__toString());