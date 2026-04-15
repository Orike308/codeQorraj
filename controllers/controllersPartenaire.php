<?php
require '../models/modelPartenaire.php';

$partenaire = $contenuPost;

require '../views/nos_partenaires.php';

?>

<!-- 
La page contrôleur doit être envoyée au routeur. Elle doit être liée à la vue et au modèle.
Il faut également récupérer les informations du modèle et les stocker dans une ou plusieurs variables.
-->