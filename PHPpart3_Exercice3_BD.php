<!-- Part 3 Exercice 3 : tableau months affichage complet -->

<?php

// Création tableau numéroté
$array_Months = [
    1 => 'janvier ',
    2 => 'février ',
    3 => 'mars ',
    4 => 'avril ',
    5 => 'mai ',
    6 => 'juin ',
    7 => 'juillet ',
    8 => 'août ',
    9 => 'septembre ',
    10 => 'octobre ',
    11 => 'novembre ',
    12 => 'décembre ', 
];

// Parcours tableau pour affichage complet avec boucle "for"
// Concaténer la ou les variables avec "<pre>" et "</pre>" 
// permet d'afficher les valeurs à la verticale

for ($mois=1; $mois < 12 ; $mois++) { 
    echo "<pre>".$array_Months[$mois]."</pre>";
}