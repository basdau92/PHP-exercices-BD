<!-- Part 3 Exercice 5 : tableau associatif départements 2 affichage complet -->

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
    echo "<pre>".$nom_Dep."</pre>";
}