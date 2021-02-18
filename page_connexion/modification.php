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
    <h2 class="centre">MODIFICATION</h2>
    <div class="box">
        <form action="Apdate.php" method="POST">
            <input type="hidden" name="id" value="<?= $id ?>">
            <div class="alignement">
                <label class="label" for="nom"> Nom: </label>
                <input class="input" type="text" name="nom" placeholder="" value=" <?= $data['Nom']; ?>">
            </div>
            <div class="alignement">
                <label class="label" for="prenom">Prénom: </label>
                <input class="input" type="text" name="prenom" placeholder="" value="<?= $data['Prenom']; ?>">
            </div>
            <div class="alignement">
                <label class="label" for="naissance">Entrez la date de naissance: </label>
                <input class="input" type="date" name="naissance" placeholder="" value="<?= $data['Dates_de_naissance']; ?>">
            </div>
            <div class="alignement">
                <label class="label" for="email">Entrez l'email:</label>
                <input class="input" type="email" name="email" placeholder="" value=" <?= $data['Email']; ?>">
            </div>


            <div class="alignement">
                <label class="label" for="sexe">Veuillez entrez le Sexe: </label>
                <input class="input" type="text" list="genders" name="sexe" placeholder="" value="<?= $data['Sexe']; ?>">
                <datalist id=" genders">
                    <option value="Masculin"></option>
                    <option value="Feminin"></option>
                    <option value="homme"></option>
                    <option value="femme"></option>
                </datalist>
            </div>
            <div class="alignement">
                <label class="label" for="ville">Entrez la ville d'origine:</label>
                <input class="input" type="text" name="ville" placeholder="" value="<?= $data['ville']; ?>">
            </div>
            <div class="alignement">
                <label class="label" for="formation">Entrez la formation de base: </label>
                <input class="input" type="text" name="formation" placeholder="" value="<?= $data['formation']; ?>">
            </div>
            <button type=" submit" class="bouton"><span>UPDATE</a></span></button>
        </form>


    </div>


</body>

</html>