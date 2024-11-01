
<?php

echo "Bonjour les etudiants de la L3TDSI <br>" ;

 
$var1 = 3;
$var2 = 4;
$resultat = $var1 + $var2 ;
echo "La somme de ".$var1. " et ".$var2." est égale à ".$resultat;

$chaine1 = "Bonjous les ";
$chaine2 = "tam sarr";

echo " \n La concaténation de chaine de caractère: \n ". $chaine1. " ".$chaine2 ;

echo "\n La valeur de la variable est $var1";

echo "\n Le 4 iéme caractère de la chaine est $chaine1[3]";
 
echo "\n La longueur de la chaine est : ".strlen($chaine2);
 
$entiers1 = 3;
$entiers2 = 2.5;
echo "Vérifier le type entier ".is_int($entiers1);
echo "\n Vérifier le type réel ".is_float($entiers2);

$tableau = array(2, "la", 2.8); 
$tableau3['premier'] = 2;
$tableau3['deuxieme'] = 4;
echo "\n Accès élément tableau ".$tableau[0];
$tableau["clé"] = "tester index 7";

print_r($tableau3);
 
define('PI', 10);
echo PI;
?>