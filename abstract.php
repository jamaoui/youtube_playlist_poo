<?php
require_once "src/abstraite/Rectangle.php";
require_once "src/abstraite/Cercle.php";
$form = new Rectangle();
$cercle = new Cercle(5);
var_dump($cercle->surface());