<?php

// EN CONTRUCTION !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

// require '../models/dataBase.php';

// function recupererTextesPage($pdo, $id_page)
// {
//     $modifTexte = $pdo->prepare("
//         SELECT t.contenu_texte
//         FROM texte t
//         INNER JOIN contient ct ON ct.contenu_texte = t.contenu_texte
//         WHERE ct.id_page = ?
//     ");

//     $modifTexte->execute([$id_page]);

//     return $modifTexte->fetchAll(PDO::FETCH_ASSOC);
// }

// function modifierTexte($pdo, $id_page, $image)
// {
//     $leNom = uniqid() . "_" . basename($image['name']);
//     $destination = "../public/asset/Titre/" . $leNom;

//     if (move_uploaded_file($image['tmp_name'], $destination)) {
//         $ancienne = $pdo->prepare("SELECT id_image FROM possed WHERE id_page = ?");
//         $ancienne->execute([$id_page]);
//         $ancienneImg = $ancienne->fetch(PDO::FETCH_ASSOC);

//         $nouvel = $pdo->prepare("UPDATE image SET nom_image = ? WHERE id_image = ?");
//         $nouvel->execute([$leNom, $ancienneImg['id_image']]);
//         return true;
//     }
//     return false;
// }