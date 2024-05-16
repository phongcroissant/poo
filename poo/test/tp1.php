<?php
require_once ("../classe/Rectangle.php");

$rectangle2= new Rectangle(1,1,"","*");
$longueur=readline("Saisissez une longueur :");
$largeur=readline("Saisissez une largeur :");
$couleur=readline("Saisissez une couleur :");
$symbole=readline("Saisissez un symbole :");

$rectangle2->setLongueur($longueur);
$rectangle2->setLargeur($largeur);
$rectangle2->setCouleur($couleur);
$rectangle2->setSymbole($symbole);
echo $rectangle2->drawRectangle2();
