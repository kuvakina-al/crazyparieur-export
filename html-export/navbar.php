<?php
$current_page = basename($_SERVER['PHP_SELF'], '.php');
?>
<nav class="navbar">
    <div class="navbar-container">
        <a href="index.php" class="navbar-logo">
            <span class="logo-crazy">Crazy</span><span class="logo-parieur">Parieur</span>
        </a>
        
        <ul class="navbar-nav desktop-only">
            <li><a href="index.php" class="<?php echo ($current_page == 'index') ? 'active' : ''; ?>">Accueil</a></li>
            <li><a href="golf.php" class="<?php echo ($current_page == 'golf') ? 'active' : ''; ?>">Golf</a></li>
            <li><a href="basketball.php" class="<?php echo ($current_page == 'basketball') ? 'active' : ''; ?>">Basketball</a></li>
        </ul>
        
        <div class="navbar-right">
            <img src="./images/header 18+.png" alt="18+" class="age-warning-img" />
            <button class="mobile-menu-toggle mobile-only" onclick="toggleMenu()">
                <span>☰ Menu</span>
            </button>
        </div>
    </div>
    
    <div class="mobile-menu mobile-only" id="mobileMenu">
        <ul>
            <li><a href="index.php" class="<?php echo ($current_page == 'index') ? 'active' : ''; ?>">Accueil</a></li>
            <li><a href="golf.php" class="<?php echo ($current_page == 'golf') ? 'active' : ''; ?>">Golf</a></li>
            <li><a href="basketball.php" class="<?php echo ($current_page == 'basketball') ? 'active' : ''; ?>">Basketball</a></li>
        </ul>
    </div>
</nav>

<script>
function toggleMenu() {
    var menu = document.getElementById('mobileMenu');
    menu.classList.toggle('active');
}
</script>