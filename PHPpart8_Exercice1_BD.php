<!-- Part 8 Exercice 1 : Formulaire Bonjour + prénom -->

<!-- PHP -->
<?php

$prenom = "";

if ($_GET && isset($_GET["prenom"])) {
    $prenom = $_GET["prenom"];
}
    
?>

<!-- HTML -->
<!-- Création du formulaire avec la méthode GET en attribut

-->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style_exercicesPHP.css">
    <title>Formulaire exercice 1 partie 8</title>
</head>
<body>
    <form class="formulaire" action="PHPpart8_Exercice1_BD.php" method="get">

        <p class="msg_bleu"><label for="prenom">Prénom
        <input type="text" size="30" name="prenom" value=""></label></p>

        <input type="submit" name="submit" value="Confirmer">
    </form>
    <p class="msg_vert"> <?php echo "Bonjour ".$prenom. "!"?></p>
</body>
</html>
