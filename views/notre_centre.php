    <!-- PARTI CONTENUE -->
    <main id="mainNotreCentre">
        <?php if (!empty($img)) : ?>
            <section id="titreImageNotreCentre" style="background-image: url('../../public/asset/Titre/<?= $img[0]['nom_image'] ?>');">
            <?php endif; ?>
            <?php
            if (isset($_SESSION['admin']) && $_SESSION['admin'] === true) {
                echo '
                <div class="btModificationImageTitre">
                    <div class="btModification">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-feather" viewBox="0 0 16 16">
                            <path d="M15.807.531c-.174-.177-.41-.289-.64-.363a3.8 3.8 0 0 0-.833-.15c-.62-.049-1.394 0-2.252.175C10.365.545 8.264 1.415 6.315 3.1S3.147 6.824 2.557 8.523c-.294.847-.44 1.634-.429 2.268.005.316.05.62.154.88q.025.061.056.122A68 68 0 0 0 .08 15.198a.53.53 0 0 0 .157.72.504.504 0 0 0 .705-.16 68 68 0 0 1 2.158-3.26c.285.141.616.195.958.182.513-.02 1.098-.188 1.723-.49 1.25-.605 2.744-1.787 4.303-3.642l1.518-1.55a.53.53 0 0 0 0-.739l-.729-.744 1.311.209a.5.5 0 0 0 .443-.15l.663-.684c.663-.68 1.292-1.325 1.763-1.892.314-.378.585-.752.754-1.107.163-.345.278-.773.112-1.188a.5.5 0 0 0-.112-.172M3.733 11.62C5.385 9.374 7.24 7.215 9.309 5.394l1.21 1.234-1.171 1.196-.027.03c-1.5 1.789-2.891 2.867-3.977 3.393-.544.263-.99.378-1.324.39a1.3 1.3 0 0 1-.287-.018Zm6.769-7.22c1.31-1.028 2.7-1.914 4.172-2.6a7 7 0 0 1-.4.523c-.442.533-1.028 1.134-1.681 1.804l-.51.524zm3.346-3.357C9.594 3.147 6.045 6.8 3.149 10.678c.007-.464.121-1.086.37-1.806.533-1.535 1.65-3.415 3.455-4.976 1.807-1.561 3.746-2.36 5.31-2.68a8 8 0 0 1 1.564-.173" />
                        </svg>
                        <p>Modifier</p>
                    </div>
                </div>';
            }
            ?>
            <h1 class="titreSouligner">Notre Centre :</h1>
            <h2 class="titreNormal">Votre Centre !</h2>
            </section>
            <div class="popUp1 expertise hoverPopUp1">
                <p class="croiPopUp1">X</p>
                <p class="titrePopUp1">QUALITÉ ET EXPERTISE</p>
                <p class="contenuPopUp1">La direction du Centre Qorraj accorde une importance particulière à la formation
                    continue externe et interne
                    dans le but d’offrir une prise en charge de qualité à ses patients. <br><br>
                    Des formations internes sont organisées telles que des supervisions par des médecins spécialisés, des
                    ateliers cliniques, des analyses de pratique professionnelle (APP) et encadrements
                    individualisés.<br><br>
                    Nous avons la chance de bénéficier de supervisions de la part de : la Dresse Von Roten (périnatalité &
                    pédopsychiatrie), du Dr Mbarga (psychiatrie adulte) et de la Dresse Karachristou (psychogériatrie).
                    <br><br>
                    Par ailleurs, le personnel du Centre Qorraj possède une expertise dans des domaines spécifiques tels que
                    la
                    psychiatrie dans les trois tranches d’âge, les troubles d’addiction, la systémie familiale, le
                    Mindfulness
                    et burnout, et bien d’autres approches spécifiques. <br><br>
                    L’équipe de soins est pluridisciplinaire et se compose : d’infirmiers-ères spécialisés-ées en
                    psychiatrie,
                    de plusieurs ASSC et d’auxiliaires de vie travaillant en étroite collaboration. <br><br>
                </p>
            </div>
            <div class="popUp1 humanite hoverPopUp1">
                <p class="croiPopUp1">X</p>
                <p class="titrePopUp1">EMPATHIE, SOLLICITUDE ET HUMANITÉ</p>
                <p class="contenuPopUp1">Le Centre Qorraj met l’humanité au cœur de ses valeurs. <br><br>
                    Celle-ci est la reconnaissance de l’autre dans ses besoins fondamentaux de vivre et d’exister dans sa
                    singularité. <br><br>
                    Le soin relationnel est notre objectif et notre principal outil de travail. <br> <br>
                    L’unicité de chacun est une priorité, ce qui nous amène à la tolérance et l’empathie émotionnelle et
                    cognitive dans la relation soignant-soigné. Il en va de même pour les qualités d’écoute active et
                    soutien
                    que possèdent notre équipe de soins. <br> <br>
                    Par la sollicitude, une attention prioritaire est portée au patient et à sa souffrance que nous espérons
                    soulager. Tout au long du processus de rétablissement, nous l'accompagnons dans la réactivation de
                    ressources personnelles telles que l'espoir, et nous l'aidons a en développer de nouvelles. <br><br>
                </p>
            </div>

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


            <div class="popUp1 soins hoverPopUp1">
                <p class="croiPopUp1">X</p>
                <p class="titrePopUp1">SOINS PERSONNALISÉS ET INDIVIDUALISÉS</p>
                <p class="contenuPopUp1">Le Centre Qorraj garantit une offre en soins de qualité adaptée à chaque patient.
                    <br><br>
                    Il est fondamental de connaître la personne selon un modèle biopsychosocial et spirituel en prenant en
                    compte son histoire (ses expériences, sa culture, ses croyances, sa personnalité, ses attentes et ses
                    besoins). <br><br>
                    Chaque suivi est construit de façon individualisée et personnalisée, toujours en priorisant les soins
                    relationnels et la transparence. Notre équipe soutient l’autodétermination du patient. <br><br>
                    De plus, nous organisons nos soins selon le concept de soins intégraux. L’infirmier-ère référent-e
                    évalue
                    les besoins, coordonne les soins, collabore avec le réseau et assure le suivi régulier du patient.
                    <br><br>
                    Lors de soins délégués, la planification est élaborée en tenant en compte des préférences du patient et
                    en
                    diminuant au maximum le tournus du personnel soignant. <br><br>
                </p>
            </div>
            <div class="popUp1 rapidite hoverPopUp1">
                <p class="croiPopUp1">X</p>
                <p class="titrePopUp1">RAPIDITÉ ET DISPONIBILITÉ</p>
                <p class="contenuPopUp1">Le Centre Qorraj est conscient que la détresse psychique nécessite un soutien et
                    une
                    réponse rapide. <br><br>
                    Lorsque nous recevons une demande de suivi, nous nous engageons à intervenir selon le degré d'urgence de
                    la
                    situation. Nous sommes en mesure de répondre dans les 24 heures si nécessaire. <br><br>
                    Grâce à son expertise, notre équipe est capable de déceler rapidement un changement de l’état psychique
                    du
                    patient. Ce qui nous permet de réagir au plus vite dans l’adaptation du suivi. <br><br>
                    La réactivité est donc une valeur qui nous caractérise et qui est essentielle pour préserver la
                    stabilité de la santé du patient. <br><br>
                </p>
            </div>

            <section id="textNotreCentre">
                <h3>Le Centre Qorraj est une jeune organisation de soins à domicile spécialisée en psychiatrie ayant démarré son activité le 1er septembre 2021.</h3>
                <p>Notre équipe soignante est composée d’infirmiers-ères spécialisés-es et expérimentés-es en psychiatrie,
                    d’assistants-es en soins et santé communautaire (ASSC), d’auxiliaires de santé et d’auxiliaires de vie,
                    qui se mobilise 7/7 jours pour évaluer et coordonner des soins de proximité. Elle travaille en
                    coopération et/ou en partenariat avec les personnes et les structures concernées par la santé mentale
                    (établissements de santé, médecine de ville) et elle utilise l’ensemble des ressources communautaires.
                    <br> <br> Nos prestations s’adressent aux patients de tout âge (jeunes, adultes et personnes âgées) en
                    souffrance psychique (maladie diagnostiquée ou pas) nécessitant un soutien à domicile.
                </p>
            </section>
            <section id="NosCaractéristiques">
                <h4>Nos caractéristiques :</h4>
                <div id="lesBtCaractéristiques">
                    <div id="btExpertise" class="btCaractéristiques">Expertise</div>
                    <div id="btHumanite" class="btCaractéristiques">Humanité</div>
                    <div id="btSoins" class="btCaractéristiques">Soins personnalisés</div>
                    <div id="btRapidite" class="btCaractéristiques">Rapidité</div>
                </div>
            </section>

            <?php if (isset($_SESSION['admin']) && $_SESSION['admin'] === true): ?>

                <div class="leForm LeFormModifImage hoverModifImage">

                    <div class="formulaire modifImage">

                        <div class="divCroix">
                            <svg width="16" height="16" fill="currentColor" class="bi bi-x-circle croixModif" viewBox="0 0 16 16">
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

                <script src="../../public/js/scriptModifImage.js"></script>
            <?php endif; ?>


    </main>

    <script src="../../public/js/scriptNotreCentre.js"></script>