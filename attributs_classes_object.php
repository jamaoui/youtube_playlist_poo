<?php
require_once "src/Cercle.php";
require_once "src/Calcul.php";

$cercle1 = new Cercle(5);
$cercle2 = new Cercle(15);
$cercle3 = new Cercle(20);
//echo $cercle1->surface()."<br>";
//echo $cercle2->surface()."<br>";
//echo $cercle3->surface()."<br>";


$calcul = new Calcul();
//echo $calcul::somme(4,3);

echo Calcul::somme(5,5);