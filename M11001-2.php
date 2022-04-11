<?php

// Créer une constante avec la fonction adaptée, et lui donner le nom et la valeur 18
define("NUMERO_POMPIERS", 18);

// Utiliser cette constante dans une nouvelle variable de type string, ayant pour contenu "Le numéro des pompiers est le " puis concaténer votre constante
$str = "Le numéro des pompiers est le " . NUMERO_POMPIERS;
echo $str;

// Concaténer les chaines de caractères suivantes :
//  - La référence "19805" est 
//  - l'appareil le plus vendu dans
//  - l'agglomération de "Pont-l'évêque"

$str1 = 'La référence "19805" est';
$str2 = "l'appareil le plus vendu dans";
$str3 = "l'agglomération de \"Pont-l'évêque\"";

echo "$str1 $str2 $str3";
