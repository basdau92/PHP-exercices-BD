<!-- Part 6 Exercice 4 : Boucles et incrémentation à moitié-valeur -->

<?php

//boucle for avec incrémentation par moitié valeur variable tant qu'elle n'atteint pas 10

for($var = 1; $var < 11; $var += $var/2 ) {
    echo nl2br($var."\n");
}