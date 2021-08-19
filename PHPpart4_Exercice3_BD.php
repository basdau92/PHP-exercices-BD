<!-- Part 4 Exercice 3 : fonction paramètres nombres et comparaisons -->

<?php

//  Variables
$num1 = 12;
$num2 = 3;

echo "Nombre1 = " . $num1 . " et nombre2 = " . $num2."<br/>";

// Création fonction
function numbers($num1, $num2)
{
    if ($num1 > $num2) {
        echo "Le 1er nombre est plus grand que le 2nd.";
    } elseif ($num1 < $num2) {
        echo "Le 1er nombre est plus petit que le 2nd.";
    } else {
        echo "Le 1er nombre et le 2nd sont égaux. ";
    }
}

//  Affichage
numbers($num1, $num2);
