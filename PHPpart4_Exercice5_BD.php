<!-- Part 4 Exercice 5 : fonction affichage numéros impairs ordre croissant 0 à 300  -->

<?php

// Création fonction
function numImpCro()
{
    for ($nums = 0; $nums < 301; $nums++) {
        if ($nums % 2 == 1) {
            echo $nums;
        }
    }
}

//  Affichage
numImpCro();