<?php
require '../models/dataBase.php';
$contenuPost = $pdo->query("SELECT * FROM partenaires");

function getImagesByPage($pdo, $id_page)
{
    $modifImg = $pdo->prepare("
        SELECT i.nom_image
        FROM image i
        INNER JOIN possed po ON po.id_image = i.id_image
        WHERE po.id_page = ?
    ");

    $modifImg->execute([$id_page]);

    return $modifImg->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!-- Le modèle doit récupérer les informations de la BDD, c’est dans ce fichier que l’on travaille -->