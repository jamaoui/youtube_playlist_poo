<?php
require_once "DivisionTrait.php";
require_once "AdditionTrait.php";
require_once "SoustractionTrait.php";

class Calcul
{
    use DivisionTrait, AdditionTrait, SoustractionTrait;
}