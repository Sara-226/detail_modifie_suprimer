<?php
require_once "connexion.php";
$id = $_POST['id'];
$email = $_POST['email'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$naissance = $_POST['naissance'];
$sexe = $_POST['sexe'];
$ville = $_POST['ville'];
$formation = $_POST['formation'];

$modif = $db->prepare('UPDATE apprenants SET Email=?, Nom=?,  Prenom=?, Dates_de_naissance=?, Sexe=?, ville=?, formation=? WHERE ID=' . $id);
$modif->execute(array($email, $nom, $prenom, $naissance, $sexe, $ville, $formation));
if ($modif) {
    header("location:liste.php");
}
