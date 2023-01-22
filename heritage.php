<?php
require_once "src/heritage/Etudiant.php";
require_once "src/heritage/Salarie.php";
require_once "src/heritage/Directeur.php";

$etudiant = new Etudiant("Jamaoui", "Mouad", 29, 19);
$walid = new Salarie("walid", "walidi", 35, 8500, "Développeur");
$farid = new Directeur("farid", "faridi", 24, 25000,"Directeur financier");

echo "<pre>";
echo $farid->getSalaireTotal();
echo "</pre>";