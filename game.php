<?php
require_once "src/Perso.php";
$goku = new Perso("Goku", 100, 10);
$vegeta = new Perso("Vegeta", 100, 8);
$goku->hit();
echo $goku->__toString();
echo "<br>";
$vegeta->hit();
echo $vegeta->__toString();