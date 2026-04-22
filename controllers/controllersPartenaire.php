<?php
ini_set('upload_max_filesize', '10M');
ini_set('post_max_size', '10M');
require '../models/modelPartenaire.php';

// ++++++++++ PARTIE DE CREATION DE CARTE ++++++++++//

$partenaire = $contenuPost;

if (isset($_FILES['imageP']) && isset($_POST['lien']) && isset($_POST['alt'])) {

    $image = $_FILES['imageP'];
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


// ++++++++++ PARTIE DE MODIFICATION DE L'IMAGE DU TITRE (aide ia j'ai bloque trop longten je commencer a pedre beaucoup trop de temps) ++++++++++ //


$id_page = 2;
$img = getImagesByPage($pdo, $id_page);

if (isset($_FILES['imageT']) && $_FILES['imageT']['error'] === 0) {
    $image = $_FILES['imageT'];
    $leNom = uniqid() . "_" . basename($image['name']);
    $destination = "../public/asset/Titre/" . $leNom;

    if (move_uploaded_file($image['tmp_name'], $destination)) {

        // On récupère l'id_image lié à cette page
        $ancienne = $pdo->prepare("SELECT id_image FROM possed WHERE id_page = ?");
        $ancienne->execute([$id_page]);
        $ancienneImg = $ancienne->fetch(PDO::FETCH_ASSOC);

        // Update table image
        $nouvel = $pdo->prepare("UPDATE image SET nom_image = ? WHERE id_image = ?");
        $nouvel->execute([$leNom, $ancienneImg['id_image']]);

        header("Location: /codeQorraj/public/index.php/nos_partenaires");
        exit;
    }
}
require '../views/nos_partenaires.php';

?>

<!-- 
La page contrôleur doit être envoyée au routeur. Elle doit être liée à la vue et au modèle.
Il faut également récupérer les informations du modèle et les stocker dans une ou plusieurs variables.
-->