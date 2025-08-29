<?php
$current_page = basename($_SERVER['PHP_SELF'], '.php');
?>
<footer class="footer">
    <div class="footer-container">
        <div class="footer-content">
            <div class="footer-logo-section">
                <a href="index.php" class="footer-logo">
                    <img src="./images/crazy parieur.png" alt="Crazy Parieur" class="footer-logo-img" />
                </a>
                <p class="footer-disclaimer">
                    © 2025 crazy-parieur.fr<br>
                    <img src="./images/footer18+.png" alt="18+" class="footer-age-warning" /><br>
                    Appelez le 0800 35 777 (Belgique), 1-888-230-3505 (Canada), 09 74 75 13 13 (France), 0800 801 381 (Suisse).<br><br>
                    Vous avez la responsabilité de vérifier que vous êtes autorisé à jouer aux jeux d'argent en ligne dans votre pays ou juridiction. Ce site d'information peut contenir des liens vers des sites de jeux en ligne qui peuvent être légaux ou pas selon les juridictions. Jouer comporte des risques : endettement, dépendance.
                </p>
            </div>
            
            <div class="footer-links-section">
                <ul class="footer-links">
                    <li><a href="conditions-generales-utilisation.php" class="<?php echo ($current_page == 'conditions-generales-utilisation') ? 'active' : ''; ?>">Conditions Générales d'Utilisation</a></li>
                    <li><a href="jeu-responsable.php" class="<?php echo ($current_page == 'jeu-responsable') ? 'active' : ''; ?>">Pratique du Jeu en Ligne Sûre</a></li>
                    <li><a href="politique-confidentialite.php" class="<?php echo ($current_page == 'politique-confidentialite') ? 'active' : ''; ?>">Règles de Confidentialité</a></li>
                    <li><a href="autorite-nationale-jeux-anj.php" class="<?php echo ($current_page == 'autorite-nationale-jeux-anj') ? 'active' : ''; ?>">ANJ</a></li>
                </ul>
                
                <div class="partner-logos">
                    <div class="partner-logo">
                        <img src="./images/footer18+.png" alt="18+" />
                    </div>
                    <div class="partner-logo">
                        <img src="./images/anj.png" alt="ANJ" />
                    </div>
                    <div class="partner-logo">
                        <img src="./images/begambleaware.org.png" alt="GambleAware" />
                    </div>
                    <div class="partner-logo">
                        <img src="./images/sos_joueurs_1.png" alt="SOS Joueurs" />
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p class="footer-copyright">© 2025 Crazy Parieur. Tous droits réservés.</p>
        </div>
    </div>
</footer>