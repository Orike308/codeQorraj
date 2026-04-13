<!-- +++++++++++++++++++ CODE POUR RESORTIRE LES INFO D'UNE POP-UP ++++++++++++++++++++++ -->
<?php
while ($affichagePost = $centre->fetch(PDO::FETCH_ASSOC)) {
?>

    <div class="popUp1 soins hoverPopUp1">
        <p class="croiPopUp1">X</p>
        <p class="titrePopUp1"><?= htmlspecialchars($affichagePost["titre_pop_up"]) ?></p>
        <p class="contenuPopUp1"><?= htmlspecialchars($affichagePost["contenu_pop_up"]) ?></p>
    </div>

<?php
}
?>

<!-- +++++++++++++++++++ CODE POUR CREE UN COMPTE ++++++++++++++++++++++ -->
<?php

require '../models/dataBase.php';

$nom = "Aurelien";
$mdp = "3008";
$hash = password_hash($mdp, PASSWORD_BCRYPT);

$stmt = $pdo->prepare("INSERT INTO utilisateur (nom_utilisateur, mdp_utilisateur, id_role) VALUES (?, ?, ?)");
$stmt->execute([$nom, $hash, 1]);

echo "Admin créé avec succès";
?>

<!-- +++++++++++++++++++ !!!!! CODE EN COURS !!!!! ++++++++++++++++++++++ -->
<?php
require '../models/modelConnexion.php';

$connexion = $contenuPost;
$connexion->fetch(PDO::FETCH_ASSOC);

//pour la conection admin
if (isset($_POST["identifiant"]) && isset($_POST["mdp"])) {

    if (!empty($_POST["identifiant"]) && !empty($_POST["mdp"])) {

        $identifiant = $_POST["identifiant"];
        $mdp = $_POST["mdp"];
        $mdpHash = $connexion["mdp_utilisateur"];

        if ($identifiant === $connexion["nom_utilisateur"] && password_verify($mdp, $mdpHash)) {
            session_set_cookie_params(7200);
            session_start();
            header("/codeQorraj/public/index.php");
        }
    } else {
        echo "Rien n’a été saisi.";
    }
}

require '../views/connexion.php';
?>


//pour la conection des user
case "user_connect":
if (!empty($_POST["pseudo_user"]) and !empty($_POST["mdp"])) {
$pseudo_user = "'" . $_POST["pseudo_user"] . "'";
$mdp = "'" . $_POST["mdp"] . "'";

$query = "SELECT pseudo_user, mdp_user FROM user WHERE pseudo_user=$pseudo_user and mdp_user=$mdp";
$result = $sql->query($query);
if ($result->num_rows == 0) {
echo "Données invalide";
} else {
session_set_cookie_params(7200);
session_start();
$_SESSION["pseudo_user"] = $_POST["pseudo_user"];
header("location:../index.php");
}
} else {
echo "Rien à été saisie.";
}
break;