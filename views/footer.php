    <!-- PARTI FOOTER -->
    <footer>
        <div class="ligneFooter">
            <p class="espaceFooter">Tout Droit réserver © Centre Qorraj - 2023</p>
            <a href="/codeQorraj/public/index.php/politique_de_confidentialite">Politique de confidentialité</a>
        </div>

        <div class="ligneFooter">
            <p class="espaceFooter">Avenue du Midi 3 - 1950 Sion</p>
            <p>027 565 14 11 - centreqorraj@hin.ch</p>
        </div>

        <?php
        if (isset($_SESSION['admin']) && $_SESSION['admin'] === true) {
            echo '<a class="leBtDeconnexion" href="../../controllers/controllersDeco.php">
                    <div class="btDeconnexion">
                        <p>Déconnexion</p>
                    </div>
                    </a>';
        }
        ?>

    </footer>