<!-- Part 7 Exercice 2 : Formulaire avec méthode POST + user.php -->

<!-- HTML -->
<!-- Création du formulaire avec la méthode POST en attribut

POST => La méthode POST, quant à elle, transmet les informations du formulaire de manière masquée 
mais non cryptée. Le fait de ne pas afficher les données ne signifie en rien qu'elles sont cryptées. 
Rappelons nous d'ailleurs que ces informations utilisent le protocole HTTP et non HTTPS qui lui crypte 
les données.

La méthode POST est préférée lorsqu'il y'a un nombre important de données à transmettre ou bien 
lorsqu'il faut envoyer des données sensibles comme des mots de passe. 
Dans certains cas, seule la méthode POST est requise : un upload de fichier par exemple.

-->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style_exercicesPHP.css">
    <title>Formulaire exercice 2 partie 7</title>
</head>
<body>
    <form class="formulaire" action="user2.php" method="post">

        <p class="msg_bleu">* Mentions obligatoires</p>

        <p class="msg_bleu"><label for="nom">Nom<strong>*</strong>
        <input type="text" size="30" name="nom" value=""></label></p>

        <p class="msg_bleu"><label for="prenom">Prénom<strong>*</strong>
        <input type="text" size="30" name="prenom" value=""></label></p>

        <input type="submit" name="submit" value="Confirmer">
    </form>
</body>
</html>
