<?php 

// Détection automatique de la page courante

$cible_page = basename($_SERVER['REQUEST_URI']);
?>
        
        
            <!-- PARTI HEADER -->
<header>
    <a href="../index.php/Accueil">
        <img id="Logo" src="/codeQorraj/public/asset/CQ_logo_512x210.png" alt="Logo">
    </a>

    <div id="menuBurger">
        <span></span>
        <span></span>
        <span></span>
    </div>

    <nav>
        <ul id="navLien">
            <li>
                <a class="bthover <?php echo ($cible_page === 'Accueil') ? 'active' : ''; ?>" href="/codeQorraj/public/index.php/Accueil">Accueil</a>
            </li>
            
            <li>
                <a class="btCentre bthover <?php echo ($cible_page === 'notre_centre') ? 'active' : ''; ?>" href="/codeQorraj/public/index.php/notre_centre">▼ Notre Centre</a>
                
                <div class="blocOver blocDeco">
                    <ul>
                        <li>
                            <a class="bthover <?php echo ($cible_page === 'notre_mission') ? 'active' : ''; ?>" href="/codeQorraj/public/index.php/notre_mission">Notre Mission</a>
                        </li>
                        <li>
                            <a class="bthover <?php echo ($cible_page === 'nos_valeurs') ? 'active' : ''; ?>" href="/codeQorraj/public/index.php/nos_valeurs">Nos Valeurs</a>
                        </li>
                        <!-- <li>
                            <a class="bthover" href="./notre_calendrier.php">Notre Calendrier 2026</a>
                        </li> -->
                        <li>
                            <a class="bthover" href="./notre_equipe.php">Notre Equipe</a>
                        </li>
                        <li>
                            <a class="bthover" href="./notre_histoire.php">Notre Histoire</a>
                        </li>
                        <li>
                            <a class="bthover" href="./nos_formations.php">Nos Formations</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li>
                <a class="bthover" href="../Préstation/nos_prestations.php">Nos Prestations</a>
            </li>
            <li>
                <a class="bthover <?php echo ($cible_page === 'nos_partenaires') ? 'active' : ''; ?>" href="/codeQorraj/public/index.php/nos_partenaires">Nos Partenaires</a>
            </li>
            <li>
                <a class="bthover" href="../nos_tarifs.php">Nos Tarifs</a>
            </li>
            <li>
                <a class="bthover <?php echo ($cible_page === 'carriere') ? 'active' : ''; ?>" href="/codeQorraj/public/index.php/carriere">Carrière</a>
            </li>
            <li>
                <a class="bthover <?php echo ($cible_page === 'contact') ? 'active' : ''; ?>" href="/codeQorraj/public/index.php/contact">Contact</a>
            </li>
        </ul>
    </nav>
</header>

<script src="../../public/js/scriptHeader.js"></script>