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
</main>

<!-- la vue ne sert que a afichez, on utilise la ou les variable determiner dans le controleur-->