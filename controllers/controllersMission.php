<?php
require '../models/modelPopUp.php';
require '../models/modelMission.php';

$id_page = 4;

// ++++++++++ PARTIE DE MODIFICATION DE L'IMAGE DU TITRE (aide ia j'ai bloque trop longten je commencer a pedre beaucoup trop de temps) ++++++++++ //

require '../models/modelModifImage.php';

$img = getImagesByPage($pdo, $id_page);

if (isset($_FILES['imageT']) && $_FILES['imageT']['error'] === 0) {
    modifierImageTitre($pdo, $id_page, $_FILES['imageT']);
    header("Location: /codeQorraj/public/index.php/notre_mission");
    exit;
}

// ++++++++++ PARTIE DE MODIFICATION DU TEXTE ++++++++++ //

// EN CONTRUCTION !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

require '../models/modelModifTexte.php';

$texte = recupererTextesPage($pdo, $id_page);

if (isset($_POST['id_texte']) && isset($_POST['contenu_texte'])) {
    $id_texte = $_POST['id_texte'];
    $nouveau_contenu = $_POST['contenu_texte'];
    modifierTexte($pdo, $id_texte, $nouveau_contenu);
    header("Location: /codeQorraj/public/index.php/notre_mission");
    exit;
}

require '../views/notre_mission.php';