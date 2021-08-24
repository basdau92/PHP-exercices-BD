<!-- Part 6 Exercice 2 : Boucles et décrémentation -->

<?php

//Création variables

$var1    = 100;
$var2    = rand(1, 100);

//Initialisation boucle simple while avec var2 * var1 / affichage résultat / décrémentation var1

while ($var1 >= 10) {

    $produit = $var1 * $var2;
    echo nl2br($produit . "\n");
    $var1--;
}
