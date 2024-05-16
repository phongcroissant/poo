<?php
require_once ("../classe/Rectangle.php");
// Utilisateur de la classe Rectangle

// Instanciation de la classe rectangle

$rectangle1= new Rectangle(12,10);
$surface=$rectangle1->calculerSurface();
echo $surface.PHP_EOL;

$rectangle1= new Rectangle(15,9);
$surface=$rectangle1->calculerSurface();
echo $surface.PHP_EOL;

// Afficher la longueur dans rectangle1

echo $rectangle1->getLongueur().PHP_EOL;
echo $rectangle1->getLargeur().PHP_EOL;
$rectangle1->setLongueur(6);
$rectangle1->setLargeur(3);
echo $rectangle1->getLongueur().PHP_EOL;
echo $rectangle1->getLargeur().PHP_EOL;
echo $rectangle1.PHP_EOL;
