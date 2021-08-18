<!-- Part 2 Exercice 2 : variable age, gender et conditions -->

<?php

$age    = 30;
$gender = "homme";

if ($age >= 18 && $gender == "femme") {
    echo "Vous êtes une femme et vous êtes MAJEURE.";
} elseif ($age <= 18 && $gender == "femme") {
    echo "Vous êtes une femme et vous êtes MINEURE.";
} elseif ($age <= 18 && $gender == "homme") {
    echo "Vous êtes un homme et vous êtes MINEUR.";
} else {
    echo "Vous êtes un homme et vous êtes MAJEUR.";
}
