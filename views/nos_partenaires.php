<meta name="description" content="Ceci est la description de ma page web.">


<main>
    <?php if (!empty($img)) : ?>

        <section id="titreImagePartenaires" style="background-image: url('../../public/asset/Titre/<?= $img[0]['nom_image'] ?>');">

        <?php endif; ?>

        <?php require_once 'components/btModificationImageTitre.php'; ?>
        <h1 class="titreSouligner">Nos partenaires :</h1>
        <h2 class="titreNormal">Notre Force !</h2>
        </section>
        <div id="sectionPartenaire">
            <div id="lesCarte">
                <?php
                /** @var PDOStatement $partenaire */ // pour que VScode ne rale pas
                while ($affichagePost = $partenaire->fetch(PDO::FETCH_ASSOC)) {
                ?>

                    <div class="cartePartenaire">
                        <a href="<?= $affichagePost["lien_site_partenaire"] ?>">
                            <img class="imgPartenaire"
                                src="<?= $affichagePost["lien_image_partenaire"] . $affichagePost["nom_image_partenaire"] ?>"
                                alt="<?= $affichagePost["alt_image_partenaire"] ?>">
                        </a>

                        <?php if (isset($_SESSION['admin']) && $_SESSION['admin'] === true) { ?>

                            <form class="formSuppression" method="POST" action="/codeQorraj/controllers/controllersPartenaire.php">
                                <input type="hidden" name="id_partenaires" value="<?= $affichagePost['id_partenaires'] ?>">
                                <input type="hidden" name="nom_image" value="<?= $affichagePost['nom_image_partenaire'] ?>">

                                <input class="btSuppression" type="submit" name="supprimer" value="Supprimer"
                                    onclick="return confirm('Tu es sûr de vouloir supprimer ?')">
                            </form>

                        <?php } ?>

                    </div>

                <?php
                }
                ?>
            </div>
        </div>

        <?php if (isset($_SESSION['admin']) && $_SESSION['admin'] === true): ?>

            <section>
                <div class="leForm">
                    <div class="formulaire">

                        <div class="debutForm">
                            <h3>Créer une nouvelle carte</h3>
                        </div>

                        <div>
                            <form class="lesInfo" action="/codeQorraj/controllers/controllersPartenaire.php" method="POST" enctype="multipart/form-data">

                                <div class="ligneInfo">
                                    <label>Image</label>
                                    <label class="btFile">
                                        <span id="NomFichiez">Choisir une image</span>
                                        <input type="file" name="imageP" required onchange="NomDuFichiez(this)">
                                    </label>
                                </div>

                                <div class="ligneInfo">
                                    <label>Lien</label>
                                    <input class="bouton_formulaire" type="text" name="lien" required>
                                </div>

                                <div class="ligneInfo">
                                    <label>Petite description</label>
                                    <input class="bouton_formulaire" type="text" name="alt" required>
                                </div>

                                <input class="envoyer" type="submit" name="form" value="Envoyer" />

                            </form>
                        </div>

                    </div>
                </div>
            </section>

            <div class="leForm LeFormModifImage hoverModifImage">

                <div class="formulaire modifImage">

                    <div class="divCroix">
                        <svg width="16" height="16" fill="currentColor" class="bi bi-x-circle croixModif croixModifImg" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                        </svg>
                    </div>

                    <div class="debutForm debutFormModifImage">
                        <h3>Modifier l'image</h3>
                    </div>

                    <form class="lesInfo" action="/codeQorraj/controllers/controllersPartenaire.php" method="POST" enctype="multipart/form-data">

                        <div class="ligneInfo">
                            <label class="btFile">
                                <span id="NomFichiezImg">Choisir une image</span>
                                <input type="file" name="imageT" required onchange="NomDuFichiezImg(this)">
                            </label>
                        </div>

                        <input class="envoyer" type="submit" name="form" value="Envoyer" />

                    </form>

                </div>

            </div>

            <script src="../../public/js/scriptPartenaires.js"></script>
            <script src="../../public/js/scriptModifImage.js"></script>

        <?php endif; ?>

</main>