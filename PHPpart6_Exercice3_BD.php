<!-- Part 6 Exercice 3 : Boucles et incrémentations -->

<?php

//Création variables

$var1    = 0;
$var2    = rand(1, 100);

//Initialisation boucle simple while avec var2 * var1 / affichage résultat / incrémentation var1 si
// inférieure à 20.

while ($var1 < 20) {

    $produit = $var1 * $var2;
    echo nl2br($produit . "\n");
    $var1++;
}