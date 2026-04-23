<?php
require '../models/modelPopUp.php';
require '../models/modelCentre.php';

$centre = $contenuPost;

// ++++++++++ PARTIE DE MODIFICATION DE L'IMAGE DU TITRE (aide ia j'ai bloque trop longten je commencer a pedre beaucoup trop de temps) ++++++++++ //

require '../models/modelModifImage.php';

$id_page = 3;
$img = getImagesByPage($pdo, $id_page);

if (isset($_FILES['imageT']) && $_FILES['imageT']['error'] === 0) {
    modifierImageTitre($pdo, $id_page, $_FILES['imageT']);
    header("Location: /codeQorraj/public/index.php/notre_centre");
    exit;
}


require '../views/notre_centre.php';
