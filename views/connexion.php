<main>

        <section class="leForm">

            <div class="formulaire">

                <div class="debutForm">
                    <h3>Vous Connecter</h3>
                </div>

                <div>
                    <form class="lesInfo" action="/codeQorraj/controllers/controllersConnexion.php" method="POST">
                        <div class="ligneInfo">
                            <label for="">Identifiant</label>
                            <input class="bouton_formulaire" type="text" name="identifiant" required>
                        </div>

                        <div class="ligneInfo">
                            <label for="">Mot de passe</label>
                            <input class="bouton_formulaire" type="password" name="mdp" required>
                        </div>

                        <input id="envoyer" type="submit" name="form" value="Envoyer" />

                    </form>
                </div>

            </div>

        </section>

    </main>