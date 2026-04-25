<?php

// EN CONTRUCTION !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

require '../models/dataBase.php';

// Recupere les textes
function recupererTextesPage($pdo, $id_page)
{
    $modifTexte  = $pdo->prepare(" SELECT t.id_texte, t.contenu_texte FROM texte t INNER JOIN contient ct ON ct.id_texte = t.id_texte WHERE ct.id_page = ? ");
    $modifTexte ->execute([$id_page]);
    return $modifTexte ->fetchAll(PDO::FETCH_ASSOC);
}

// Modifie les texte
function modifierTexte($pdo, $id_texte, $nouveau_contenu)
{
    $modifTexte  = $pdo->prepare(" UPDATE texte SET contenu_texte = ? WHERE id_texte = ? ");
    return $modifTexte ->execute([$nouveau_contenu, $id_texte]);
}