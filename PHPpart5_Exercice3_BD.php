<!-- Part 5 Exercice 3 : Calcul écart jours Date -->

<?php

//Création de variables pour stocker les dates.
$dateRef = date_create("2019-09-16");

//date_create n'acceptant pas de convertir directement un objet en chaîne de caractères,
//on stocke date() et ses paramètres dans la var $aujourdhui (qui est un objet).

$auj      = date("Y-m-d");
$dateActu = date_create($auj);

//Calcul entre les deux dates à l'aide de date_diff() qui va soustraire le premier paramètre au second.

$calcJours = date_diff($dateActu, $dateRef);

//Affichage du nombre de jours d'écart.

//nl2br() et "\n" sont des alternatives purement PHP à "<br/>".
//date_format() permet d'encoder un objet "Date item" en string selon les paramètres saisis en secondes position.
//format() sert à encoder l'intervalle obtenu par date_diff en élément lisible, ici en jours avec %a.

echo nl2br("Date sélectionnée: " . date_format($dateRef, "Y-m-d") . "\n" . "Date actuelle: " . $auj . "\n \n" . $calcJours->format("Il ya %a jours d'écart entre ces deux dates."));

echo nl2br("\n \n"."Autre manière avec DateTime: "."\n \n");

$date1 = new DateTime("now");
$date2 = new DateTime("2019-09-16");

print_r ($date1->diff($date2));
