<?php
require_once ("../classe/Personne.php");

$dateNaissance=DateTime::createFromFormat("d/m/Y","24/03/2020");
$personne1=new Personne("nguyen",["phong","test"],DateTime::createFromFormat("d/m/Y","24/03/2004"));
echo $personne1.PHP_EOL;
echo "Identité Courante : ".$personne1->getIdentiteCourante();
