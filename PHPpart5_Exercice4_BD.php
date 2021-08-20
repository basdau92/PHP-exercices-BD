<!-- Part 5 Exercice 4 : Calcul nombre jours dans mois Date -->

<?php

//Calcul avec la fonction cal_days_in_month() du nombre de jours selon type calendrier, mois et année.

$nbreJourMois = cal_days_in_month(CAL_GREGORIAN, 2, 2016);

//Affichage.
echo "Il y avait ".$nbreJourMois. " jours au mois de février 2016";
