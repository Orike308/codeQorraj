<meta name="description" content="Ceci est la description de ma page web.">


<main>
    <section id="titreImagePartenaires">
        <h1 class="titreSouligner">Nos partenaires :</h1>
        <h2 class="titreNormal">Notre Force !</h2>
    </section>
    <div id="sectionPartenaire">
        <div id="lesCarte">

            <?php
            while ($affichagePost = $partenaire->fetch(PDO::FETCH_ASSOC)) {
            ?>

                <div class="cartePartenaire">
                    <a href="<?= $affichagePost["lien_site_partenaire"] ?>">
                        <img class="imgPartenaire"
                            src="<?= $affichagePost["lien_image_partenaire"] . $affichagePost["nom_image_partenaire"] ?>"
                            alt="<?= $affichagePost["alt_image_partenaire"] ?>">
                    </a>
                </div>

            <?php
            }
            ?>
        </div>
    </div>

    <?php
    if (isset($_SESSION['admin']) && $_SESSION['admin'] === true) {
        echo '    <section>
        <div class="leForm">

            <div class="formulaire">

                <div class="debutForm">
                    <h3>Créer une nouvelle carte</h3>
                </div>

                <div>
                    <form class="lesInfo" action="/codeQorraj/controllers/controllersPartenaire.php" method="POST">
                        <div class="ligneInfo">
                            <label for="">Image</label>
                            <label class="btFile">
                                <span id="file-text">Choisir une image</span>
                                <input type="file" name="identifiant" required onchange="NomDuFichiez(this)">
                            </label>
                        </div>

                        <div class="ligneInfo">
                            <label for="">Lien</label>
                            <input class="bouton_formulaire" type="text" name="mdp" required>
                        </div>

                        <input id="envoyer" type="submit" name="form" value="Envoyer" />

                    </form>
                </div>

            </div>

        </div>
    </section>
    
    <script src="../../public/js/scriptPartenaires.js"></script>';
    } else {
        echo "";
    }
    ?>
</main>