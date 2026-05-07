<?php
function router($uri, $method)
{
    $cible = parse_url($uri, PHP_URL_PATH);
    $data = [];

    if ($_SERVER['REQUEST_URI'] === '/codeQorraj/public/') {
        header('Location: /codeQorraj/public/index.php/Accueil');
        exit;
    }

    if ($method !== "POST") {
        switch ($cible) {
            case '/codeQorraj/public/':
            case '/codeQorraj/public/index.php':
            case '/codeQorraj/public/index.php/Accueil':
                $page = "../views/home.php";
                $data['titrePage'] = "Accueil | Centre Qorraj";
                $data['metaDescription'] = "Bienvenue sur le site du Centre Qorraj.";
                break;

            case '/codeQorraj/public/index.php/notre_mission':
                $page = "../controllers/controllersMission.php";
                $data['titrePage'] = "Notre Mission | Centre Qorraj";
                $data['metaDescription'] = "Le Centre Qorraj a pour mission de soutenir le maintien à domicile de personnes atteintes dans leur santé psychique en collaboration avec le patient, ses proches et le réseau socio-sanitaire valaisan.";
                break;

            case '/codeQorraj/public/index.php/nos_partenaires':
                $page = "../controllers/controllersPartenaire.php";
                $data['titrePage'] = "Nos Partenaires | Centre Qorraj";
                $data['metaDescription'] = "Le centre Qorraj collabore étroitement avec différentes institutions de Suisse Romande.";
                break;

            case '/codeQorraj/public/index.php/notre_centre':
                $page = "../controllers/controllersCentre.php";
                $data['titrePage'] = "Notre Centre | Centre Qorraj";
                $data['metaDescription'] = "Le Centre Qorraj est une jeune organisation de soins à domicile spécialisée en psychiatrie ayant démarré son activité le 1er septembre 2021.";
                break;

            case '/codeQorraj/public/index.php/nos_valeurs':
                $page = "../views/nos_valeurs.php";
                $data['titrePage'] = "Nos Valeurs | Centre Qorraj";
                $data['metaDescription'] = "++++++++++++++++++++++++++++";
                break;

            case '/codeQorraj/public/index.php/carriere':
                $page = "../views/carriere.php";
                $data['titrePage'] = "Carriere | Centre Qorraj";
                $data['metaDescription'] = "+++++++++++++++++++++++++++++++++";
                break;

            case '/codeQorraj/public/index.php/politique_de_confidentialite':
                $page = "../views/politique_de_confidentialite.php";
                $data['titrePage'] = "Politique de Confidentialite | Centre Qorraj";
                $data['metaDescription'] = "+++++++++++++++++++++++++";
                break;

            case '/codeQorraj/public/index.php/connexion':
                $page = "../controllers/controllersConnexion.php";
                $data['titrePage'] = "Connexion | Centre Qorraj";
                $data['metaDescription'] = "+++++++++++++++++++++";
                break;

            case '/codeQorraj/public/index.php/contact':
                $page = "../controllers/controllersContact.php";
                $data['titrePage'] = "Contact | Centre Qorraj";
                $data['metaDescription'] = "+++++++++++++++++++++";
                break;

            default:
                $page = "../views/404.php";
                $data['titrePage'] = "Page non trouvée | Centre Qorraj";
                $data['metaDescription'] = "Cette page n'existe pas.";
                break;
        }
    }

    // Retourner la page cible et les variables
    return ['page' => $page, 'data' => $data];
}
