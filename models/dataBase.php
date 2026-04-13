<!-- Se ficher de se connecter à la base de données (BDD) -->

<?php
try {
    $pdo = new PDO(

        // adresse + nom de la base + encodage
        'mysql:host=127.0.0.1;dbname=centre_qorraj;charset=utf8',

        // le nom utilisateur
        'root',

        // Le mdp
        '',

        // Les options
        [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );

} catch (PDOException $e) {
    die("Erreur : " . $e->getMessage());
}
?>

<!-- <?php
// $pdo = new mysqli("127.0.0.1", "root", "", "centre_qorraj");
?> -->