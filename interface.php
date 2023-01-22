<?php

require_once "src/interface/Rectangle.php";
require_once "src/interface/Cercle.php";
$form = new Rectangle();
$cercle = new Cercle(5);
var_dump($cercle->surface());