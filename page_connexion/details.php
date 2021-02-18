<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="styles/formulaire.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
require_once "connexion.php";
$id = $_GET['id'];
$recupere = $db->prepare('SELECT * FROM apprenants WHERE ID=?');
$recupere->execute(array($id));

$data = $recupere->fetch();
?>

<body>
    <div class="div_header">
        <img class="img_header2" src="fonts/logo.png" alt="Simplon">
    </div>
    <h2 class="centre">DETAILS</h2>
    <div class="box">
        <form>
            <input type="hidden" name="id" value="<?= $id ?>">
            <div class="alignement">
                <label class="label" for="nom"> Nom: </label>
                <div><?= $data['Nom']; ?></div>
            </div>
            <div class="alignement">
                <label class="label" for="prenom">Prénom: </label>
                <div><?= $data['Prenom']; ?></div>
            </div>
            <div class="alignement">
                <label class="label" for="naissance">Entrez la date de naissance: </label>
                <div><?= $data['Dates_de_naissance']; ?></div>
            </div>
            <div class="alignement">
                <label class="label" for="email">Entrez l'email:</label>
                <div><?= $data['Email']; ?></div>
            </div>


            <div class="alignement">
                <label class="label" for="sexe">Veuillez entrez le Sexe: </label>
                <div><?= $data['Sexe']; ?></div>
            </div>
            <div class="alignement">
                <label class="label" for="ville">Entrez la ville d'origine:</label>
                <div><?= $data['ville']; ?></div>
            </div>
            <div class="alignement">
                <label class="label" for="formation">Entrez la formation de base: </label>
                <div><?= $data['formation']; ?></div>
            </div>
        </form>
        <button type="submit" class="bouton"><span><a href="liste.php">RETOUR</a></span></button>

    </div>


</body>

</html>