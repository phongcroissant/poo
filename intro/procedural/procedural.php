<?php
require_once ("fonction.php");

// Définir un rectangle
$longueur1=10;
$largeur1=5;
$perimetre=calculerPerimetre($longueur1,$largeur1);
echo "Le perimètre est de $perimetre".PHP_EOL;
$aire=calculerAire($longueur1,$largeur1);
echo "L'aire est de $aire". PHP_EOL;

// Définir un nouveau rectangle
$longueur2=50;
$largeur2=25;
$perimetre=calculerPerimetre($longueur2,$largeur2);
echo "Le perimètre est de $perimetre".PHP_EOL;
$aire=calculerAire($longueur2,$largeur2);
echo "L'aire est de $aire". PHP_EOL;