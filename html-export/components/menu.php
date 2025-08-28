<?php
$current_page = basename($_SERVER['PHP_SELF'], '.php');
?>
<div class="menu-overlay" id="menuOverlay">
    <div class="menu-container">
        <div class="menu-header">
            <h3 class="menu-title">☰ Menu</h3>
            <button class="menu-close" onclick="closeMenu()">×</button>
        </div>
        
        <div class="menu-grid">
            <a href="index.php" class="menu-item <?php echo ($current_page == 'index') ? 'active' : ''; ?>">Accueil</a>
            <a href="golf.php" class="menu-item <?php echo ($current_page == 'golf') ? 'active' : ''; ?>">Golf</a>
            <a href="basketball.php" class="menu-item <?php echo ($current_page == 'basketball') ? 'active' : ''; ?>">Basketball</a>
            <a href="index.php" class="menu-item">Accueil</a>
            <a href="golf.php" class="menu-item">Golf</a>
            <a href="basketball.php" class="menu-item">Basketball</a>
            <a href="index.php" class="menu-item">Accueil</a>
            <a href="golf.php" class="menu-item">Golf</a>
            <a href="basketball.php" class="menu-item">Basketball</a>
            <a href="index.php" class="menu-item">Accueil</a>
            <a href="golf.php" class="menu-item">Golf</a>
            <a href="basketball.php" class="menu-item">Basketball</a>
        </div>
    </div>
</div>

<script>
function openMenu() {
    document.getElementById('menuOverlay').classList.add('active');
}

function closeMenu() {
    document.getElementById('menuOverlay').classList.remove('active');
}

// Close menu when clicking overlay
document.getElementById('menuOverlay').addEventListener('click', function(e) {
    if (e.target === this) {
        closeMenu();
    }
});
</script>