<!-- Part 8 Exercice 2 : Formulaire complet et affichage msg erreur -->

<!-- PHP -->
<?php

if ($_POST && isset($_POST["nom"], $_POST["prenom"], $_POST["bdate"], $_POST["email"],$_POST["telephone"])) {

    $nom = validationForm($_POST["nom"]);
    $prenom = validationForm($_POST["prenom"]);
    $bdate = validationForm($_POST["bdate"]);
    $email = validationForm($_POST["email"]);
    $tel = validationForm($_POST["telephone"]);

    // Création fonction pour sécuriser au niveau serveur les données avec htmlspecialchars(), trim() et stripslashes()
    function validationForm($datas){
        if (empty($nom)) {
            
        }
        
    }
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
    <link rel="stylesheet" href="Style_exercice2_part8PHP.css">
    <title>Formulaire exercice 2 partie 8</title>
</head>
<body>
    <form class="formulaire" action="PHPpart8_Exercice1_BD.php" method="post">
        <fieldset>
            <legend class="lgd_title">Vos coordonnées</legend>
            <div class="div_fds">
                <label class="lbl_bleu" for="nom">Nom</label>
                <input type="text" maxlenght="20" name="nom" placeholder="ex: Dupont" value="">
                <div class="messages"></div>
            </div>
            <div class="div_fds">
                <label class="lbl_bleu" for="prenom">Prénom</label>
                <input type="text" maxlenght="20" name="prenom" placeholder="ex: Jean" value="">
                <div class="messages"></div>
            </div>
            <div class="div_fds">
                <label class="lbl_bleu" for="bdate">Date de naissance</label>
                <input type="text" name="bdate" size="10" maxlength="10" placeholder="JJ/MM/AAAA" value="">
                <div class="messages"></div>
            </div>
            <div class="div_fds">
                <label class="lbl_bleu" for="email" required>E-mail</label>
                <input type="email" pattern="/#^[a-z0-9._-]+@$#[a-z0-9._-]{2,}\.[a-z]{2,8}/" placeholder="ex : jean.dupont@yahoo.fr" max="8" name="email" value="">
                <div class="messages"></div>
            </div>
            <div class="div_fds">
                <label class="lbl_bleu" for="telephone">Téléphone</label>
                <input type="tel" pattern ="[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}" placeholder="ex: 0610203040" max="10" name="telephone" value="">
                <div class="messages"></div>
            </div>
        </fieldset>

        <input id="btn_confirm" class="btn_submit" type="submit" name="submit" value="Confirmer">
    </form>

    <script src=""></script>
</body>
</html>
