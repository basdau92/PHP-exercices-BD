<!-- Part 3 Exercice 6 : tableau associatif départements 2 affichage complet clés/valeurs -->

<?php

// Création tableau associatif
$array_Departments = [
    02 => 'Aisne ',
    59 => 'Nord ',
    60 => 'Oise ',
    62 => 'Pas-de-Calais ',
    80 => 'Somme ',
];

// Affichage complet valeurs tableau avec "foreach"

foreach ($array_Departments as $num_Dep => $nom_Dep) {
    echo "<pre>".$nom_Dep."a le numéro ".$num_Dep."</pre>";
}