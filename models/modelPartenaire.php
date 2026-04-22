<?php
require '../models/dataBase.php';
$contenuPost = $pdo->query("SELECT * FROM partenaires");

function getImagesByPage($pdo, $id_page)
{
    $stmt = $pdo->prepare("
        SELECT i.nom_image
        FROM image i
        INNER JOIN possed po ON po.id_image = i.id_image
        WHERE po.id_page = ?
    ");

    $stmt->execute([$id_page]);

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!-- Le modèle doit récupérer les informations de la BDD, c’est dans ce fichier que l’on travaille -->