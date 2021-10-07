

<?php

define ("PI", 3.14);
echo "PI" . "<br />";

echo PHP_OS . "<br />"; 
echo PHP_VERSION . "<br />";

echo $_SERVER['SCRIPT_NAME'] . "<br />";
echo $_SERVER['REMOTE_ADDR'] . "<br />";

$prenom="Osman";
$nom="SALEM";
echo "mon nom est M. " . $prenom . "" .$nom."<br />";

$mois[1] = "janvier";
$mois[2] = "février";
$mois[3] = "mars";
$mois[4] = "avril";


$mois = array("janvier","février","mars","avril");
echo  $mois[0] . ", " . $mois[1] .", " . $mois[2] . " and " . $mois[3] . ".". "<br />";

$nb = count($mois);
echo "$nb mois ont été renseignés"."<br />";
echo "Quelle est la différence avec la commande suivante :"."<br />";
echo "$nb mois ont été renseignés"."<br />";
echo "Quelle est la différence avec la commande suivante : ".$nb ."<br />";
echo "Quelle est la différence avec la commande suivante : ".$nb ."<br />";


$site = "www.math-info.univ-paris5.fr"."<br />";
echo "$site[4] <br />"; // attention ! indice de la première lettre est 0
echo "$site[0] <br />";


$case[1][1] = "vide";
$case[1][2] = "rond";
$case[1][3] = "croix";
$case[2][1] = "rond";
$case[2][2] = "croix";
$case[2][3] = "vide";
$case[3][1] = "croix";
$case[3][2] = "rond";
$case[3][3] = "vide";
echo "la case 3,1 contient : " . $case[3][1]."<br />";
echo "la case 3,1 contient :" . $case[3][1]."<br />";
echo "la case 3,1 contient : ".$case[3][1]."<br />";
echo "Ceci est une chaîne simple"."<br />";
echo "Vous pouvez inclure des nouvelles lignes dans une chaîne comme ceci."."<br />";
echo "Arnaud a coutume de dire : " ;
echo 'Etes vous sûr de vouloir effacer le dossier C:\\*.*?'."<br />";
echo 'Etes vous sûr de vouloir effacer le dossier C:\*.*?'."<br />";
echo 'Je suis en train de mettre une nouvelle ligne comme ceci : \n'."<br />";
echo 'Avez-vous remarqué ? Sinon, adressez-vous à votre ophtalmo !'."<br />";



?>

