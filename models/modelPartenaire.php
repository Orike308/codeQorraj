<?php
require '../models/dataBase.php';

$contenuPost = $pdo->query("SELECT * FROM partenaires");

?>

<!-- Le modèle doit récupérer les informations de la BDD, c’est dans ce fichier que l’on travaille -->