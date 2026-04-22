<?php
require '../models/modelPartenaire.php';

// ++++++++++ PARTIE DE CREATION DE CARTE ++++++++++//

$partenaire = $contenuPost;

if (isset($_FILES['image']) && isset($_POST['lien']) && isset($_POST['alt'])) {

    $image = $_FILES['image'];
    $lien = $_POST['lien'];
    $alt = $_POST['alt'];
    $route = "../../public/asset/Partenaires/";
    $date = date('Y-m-d H:i:s');


    $fileName = $image['name'];
    $fileTmp = $image['tmp_name'];
    $fileError = $image['error'];

    if ($fileError === 0) {

        // cree un nom unique dans le fichez
        $leNom = uniqid() . "_" . basename($fileName);

        // Route de destination dans le dossier
        $destination = "../public/asset/Partenaires/" . $leNom;

        // Inserait le fichier en bdd
        if (move_uploaded_file($fileTmp, $destination)) {

            $bdd = $pdo->prepare("INSERT INTO partenaires (lien_image_partenaire, lien_site_partenaire, nom_image_partenaire, alt_image_partenaire, date_partenaires) VALUES (?, ?, ?, ?, ?)");
            $bdd->execute([$route, $lien, $leNom, $alt, $date]);

            header("Location: /codeQorraj/public/index.php/nos_partenaires");
            exit;
        }
        header("Location: /codeQorraj/public/index.php/nos_partenaires");
        exit;
    }
    header("Location: /codeQorraj/public/index.php/nos_partenaires");
    exit;
}
// ++++++++++ PARTIE DE SUPPRESSION DE CARTE ++++++++++ //
if (isset($_POST['supprimer']) && isset($_POST['id_partenaires']) && isset($_POST['nom_image'])) {

    $id = $_POST['id_partenaires']; // ✔ CORRIGÉ
    $nomImage = $_POST['nom_image'];

    $chemin = "../public/asset/Partenaires/" . $nomImage;

    // Supprime le fichier
    if (file_exists($chemin)) {
        unlink($chemin);
    }

    // Supprime en bdd
    $bdd = $pdo->prepare("DELETE FROM partenaires WHERE id_partenaires = ?");
    $bdd->execute([$id]);

    header("Location: /codeQorraj/public/index.php/nos_partenaires");
    exit;
}


// ++++++++++ PARTIE DE MODIFICATION DE L'IMAGE DU TITRE ++++++++++ //


$id_page = 2;

$img = getImagesByPage($pdo, $id_page);

if (isset($_FILES['image'])) {

    $image = $_FILES['image'];

    if ($image['error'] === 0) {

        $leNom = uniqid() . "_" . basename($image['name']);
        $destination = "../public/asset/Titre/" . $leNom;

        if (move_uploaded_file($image['tmp_name'], $destination)) {

            $stmt = $pdo->prepare("INSERT INTO image (nom_image) VALUES (?)");
            $stmt->execute([$leNom]);

            $id_image = $pdo->lastInsertId();

            $stmt = $pdo->prepare("INSERT INTO possed (id_image, id_page) VALUES (?, ?)");
            $stmt->execute([$id_image, $id_page]);

            header("Location: /codeQorraj/public/index.php/nos_partenaires");
            exit;
        }
    }
}

require '../views/nos_partenaires.php';

?>

<!-- 
La page contrôleur doit être envoyée au routeur. Elle doit être liée à la vue et au modèle.
Il faut également récupérer les informations du modèle et les stocker dans une ou plusieurs variables.
-->