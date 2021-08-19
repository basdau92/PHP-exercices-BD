<?php require "PHPpart4_Exercice4_BD.php";

// Création fonction
function sujet($firstname, $name, $age)
{
    echo "Bonjour " . $firstname . $name . ", tu as " . $age . " ans.";
}
//  Affichage
sujet($firstname, $name, $age);
