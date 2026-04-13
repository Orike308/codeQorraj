<?php
require '../models/dataBase.php';

$contenuPost = $pdo->prepare("SELECT nom_utilisateur, mdp_utilisateur FROM utilisateur WHERE nom_utilisateur = ?");
$contenuPost->execute([$identifiant]);
?>

<!-- <?php
// require '../models/dataBase.php';

// function admin($pdo, $identifiant) {
//     $contenuPost = $pdo->prepare("SELECT nom_utilisateur, mdp_utilisateur FROM utilisateur WHERE nom_utilisateur = ?");
//     $contenuPost->execute([$identifiant]);
//     return $contenuPost->fetch();
// }
?> -->