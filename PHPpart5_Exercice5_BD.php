<!-- Part 5 Exercice 5 : Date actuelle + 20j -->

<?php

//Création variables

$date = date("Y-m-d");
$dateActu = date_create($date);

//Avec date_add(date actuelle, intervalle(string nbre jours))

date_add($dateActu, date_interval_create_from_date_string("20 days"));

//Affichage.
echo "Date actuelle augmentée de 20 jours: ".date_format($dateActu, "Y-m-d");
