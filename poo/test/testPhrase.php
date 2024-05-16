<?php
require_once ("../classe/Phrase.php");

$phrase= new Phrase ("");
echo $phrase->ajouterPhrase("Bonjour je m'appelle Phong");
echo $phrase->getPhrase().PHP_EOL;
echo $phrase->compterMots().PHP_EOL;
echo $phrase->compterCaracteresSansEspace().PHP_EOL;
echo $phrase->getMotParPositions(5).PHP_EOL;
echo $phrase->determinerTypePhrase().PHP_EOL;
echo $phrase->determinerNombreOccurenceMot("Je").PHP_EOL;
echo $phrase->remplacerMotParMot("Je","tu").PHP_EOL;
echo $phrase->reformaterPhrase().PHP_EOL;

