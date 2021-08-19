<?php require "PHPpart4_Exercice6_BD.php";

// Création fonction
function numImpCro($mult3, $mult5)
{
    for ($nums = 1; $nums < 100; $nums++) {
        if ($nums % $mult3 == 0 && $nums % $mult5 == 0) {
            echo "FizzBuzz"."</br>";
        } elseif ($nums % $mult3 == 0) {
            echo "Fizz"."</br>";
        } elseif ($nums % $mult5 == 0) {
            echo "Buzz"."</br>";
        } else {
            echo $nums."</br>";
        }
    }
}

//  Affichage
numImpCro($mult3, $mult5);