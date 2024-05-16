<?php

// Créer un objet DateTime
$now= new DateTime();
echo $now->format("d/m/Y H:i:s");
$date1=new DateTime("03/23/2020");
echo $date1->format("d/m/Y").PHP_EOL;
$date2=DateTime::createFromFormat("d/m/Y","24/03/2020");
echo $date2->format("d/m/Y").PHP_EOL;