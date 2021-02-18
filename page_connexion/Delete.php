<?php
require_once "connexion.php";
$id = $_GET['id'];
$en = $db->prepare('DELETE FROM apprenants WHERE ID=?');
$en->execute(array($id));
if ($en) {
    header("location:liste.php");
}
