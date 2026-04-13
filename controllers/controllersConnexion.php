<?php

// pour la connexion admin
if (isset($_POST["identifiant"]) && isset($_POST["mdp"])) {

    if (!empty($_POST["identifiant"]) && !empty($_POST["mdp"])) {

        $identifiant = $_POST["identifiant"];
        $mdp = $_POST["mdp"];

        require '../models/modelConnexion.php';

        $connexionPost = $contenuPost->fetch(PDO::FETCH_ASSOC);

        if ($connexionPost) {
            $mdpHash = $connexionPost["mdp_utilisateur"];

            if ($identifiant === $connexionPost["nom_utilisateur"] && password_verify($mdp, $mdpHash)) {
                session_set_cookie_params(7200);
                session_start();
                header("Location: /codeQorraj/public/index.php");
                exit();
            } else {
                echo "Information incorrecte";
            }
        } else {
            echo "Utilisateur introuvable";
        }

    } else {
        echo "Rien n’a été saisi.";
    }
}

require '../views/connexion.php';
?>