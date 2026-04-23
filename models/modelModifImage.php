<?php

require '../models/dataBase.php';

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

function modifierImageTitre($pdo, $id_page, $image)
{
    $leNom = uniqid() . "_" . basename($image['name']);
    $destination = "../public/asset/Titre/" . $leNom;

    if (move_uploaded_file($image['tmp_name'], $destination)) {
        $ancienne = $pdo->prepare("SELECT id_image FROM possed WHERE id_page = ?");
        $ancienne->execute([$id_page]);
        $ancienneImg = $ancienne->fetch(PDO::FETCH_ASSOC);

        $nouvel = $pdo->prepare("UPDATE image SET nom_image = ? WHERE id_image = ?");
        $nouvel->execute([$leNom, $ancienneImg['id_image']]);
        return true;
    }
    return false;
}
