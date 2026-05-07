<?php
session_start();

// Defini l'URL de base
$basePath = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
$basePath = $basePath === '/' ? '' : rtrim($basePath, '/');
define('BASE_URL', $basePath . '/');

// J'apelle le router pour recuperer la page et les variables defini
require '../config/router.php';
$router = router($_SERVER["REQUEST_URI"], $_SERVER["REQUEST_METHOD"]);


// Les ?? c'est les donne par défaut
$page = $router['page'] ?? "../views/404.php";
$data = $router['data'] ?? [];

// Variables pour la mis a jour du head
$titrePage = $data['titrePage'] ?? "Centre Qorraj";
$metaDescription = $data['metaDescription'] ?? "Bienvenu sur notre site";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $metaDescription ?>">
    <title><?= $titrePage ?></title>
    <link rel="shortcut icon" href="<?= BASE_URL ?>asset/fvLogoQorraj.png">
    <link rel="stylesheet" href="<?= BASE_URL ?>css/style.css">
</head>

<body>

    <!-- Header -->
    <?php include_once '../views/components/header.php'; ?>

    <!-- Contenu -->
    <?php include_once $page; ?>

    <!-- Footer -->
    <?php include_once '../views/components/footer.php'; ?>

</body>

<script src="../js/scriptFondu.js"></script>

</html>