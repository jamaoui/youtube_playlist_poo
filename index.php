<?php

require_once "src/banque/CompteEpargne.php";
require_once "src/banque/ComptePayant.php";

$compte1 = new Compte();
$compteEpargne = new CompteEpargne(5000);
$comptePayant = new ComptePayant(500);

?>
    <h5>Compte épargne</h5>
<?php
$compteEpargne->deposer(500);
$compteEpargne->retirer(100);
$compteEpargne->calculerInteret();
echo $compteEpargne->__toString();
?>
    <h5>Compte payant</h5>
<?php
$comptePayant->deposer(100);
$comptePayant->retirer(400);
echo $comptePayant->__toString();