<!-- Part 7 Exercice 1 : Formulaire avec méthode GET + user.php -->

<!-- PHP -->
<!-- "print_r $_GET" => Renvoie toutes les transmissions de données via la méthode GET -->

<?php

$nom ="";
$prenom ="";

if ($_GET && isset($_GET["nom"], $_GET["prenom"])) {
    $nom = $_GET["nom"];
    $prenom = $_GET["prenom"];
}
    
?>

<!-- HTML -->
<!-- Création du formulaire avec la méthode GET en attribut

GET => Lorsque la méthode GET est utilisée, toutes les données de formulaire sont codées dans l’URL
et ajoutées à l’URL en tant que paramètres.

*GET est moins sécurisé que POST car les données envoyées font partie de l’URL. Donc, il est enregistré
dans l’historique du navigateur et les journaux du serveur en texte brut.

*GET ne doit pas être utilisée lors de l’envoi de mots de passe ou d’autres informations sensibles.
Elle transporte un nombre limité de données et peut être mise en cache.
-->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style_exercicesPHP.css">
    <title>Formulaire exercice 1 partie 7</title>
</head>
<body>
    <form class="formulaire" action="user1.php" method="get">

        <p class="msg_bleu">* Mentions obligatoires</p>

        <p class="msg_bleu"><label for="nom">Nom<strong>*</strong>
        <input type="text" size="30" name="nom" value=""></label></p>

        <p class="msg_bleu"><label for="prenom">Prénom<strong>*</strong>
        <input type="text" size="30" name="prenom" value=""></label></p>

        <input type="submit" name="submit" value="Confirmer">
    </form>
</body>
</html>
