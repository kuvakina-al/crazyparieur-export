<?php
$current_page = basename($_SERVER['PHP_SELF'], '.php');
?>
<nav class="navbar">
    <div class="navbar-container">
        <div class="navbar-main">
            <a href="index.php" class="navbar-logo">
                <img src="./images/crazy parieur.png" alt="Crazy Parieur" class="navbar-logo-img" />
            </a>
            
            <ul class="navbar-nav desktop-only">
                <li><a href="index.php" class="<?php echo ($current_page == 'index') ? 'active' : ''; ?>">Accueil</a></li>
                <li><a href="golf.php" class="<?php echo ($current_page == 'golf') ? 'active' : ''; ?>">Golf</a></li>
                <li><a href="basketball.php" class="<?php echo ($current_page == 'basketball') ? 'active' : ''; ?>">Basketball</a></li>
            </ul>
            
            <div class="navbar-right desktop-only">
                <div class="warning-section">
                    <img src="./images/header 18+.png" alt="18+" class="age-warning-img" />
                    <span class="warning-text">Jouer Comporte des Risques: Endettement, Isolement, Dépendance. Pour être aidé, appelez le 09-74-75-13-13 (Appel non surtaxé)</span>
                </div>
            </div>
            
            <button class="mobile-menu-toggle mobile-only" onclick="openMenu()">
                <span class="hamburger-icon">☰</span>
                <span class="menu-text">Menu</span>
            </button>
        </div>
        
        <!-- Mobile warning section -->
        <div class="mobile-warning mobile-only">
            <img src="./images/header 18+.png" alt="18+" class="mobile-age-warning-img" />
            <span class="mobile-warning-text">Jouer Comporte des Risques: Endettement, Isolement, Dépendance. Pour être aidé, appelez le 09-74-75-13-13 (Appel non surtaxé)</span>
        </div>
    </div>
</nav>
