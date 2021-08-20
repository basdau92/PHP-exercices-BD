<!-- Part 5 Exercice 2 : Date -->

<?php

// Utilisation de setlocale() pour obtenir la localisation géographique 

setlocale (LC_TIME, 'fr_FR.utf8','fra'); 

// Affichage avec utf8_encode() pour prendre en charge les accentuations 
// strftime() pour formater la date avec configuration locale

echo utf8_encode(strftime("Nous sommes le %A %d %B %Y"));

//Autre façon de procéder :

//$date = new DateTime(); => pas de paramètres, ça donne la date actuelle.
//$date->setlocale("FR");







