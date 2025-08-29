<?php
$current_page = basename($_SERVER['PHP_SELF'], '.php');
?>
<div class="menu-overlay" id="menuOverlay">
    <div class="menu-container">
        <div class="menu-header">
            <button class="menu-close" onclick="closeMenu()">× Menu</button>
        </div>
        
        <div class="menu-items">
            <a href="index.php" class="menu-item <?php echo ($current_page == 'index') ? 'active' : ''; ?>">Accueil</a>
            <a href="golf.php" class="menu-item <?php echo ($current_page == 'golf') ? 'active' : ''; ?>">Golf</a>
            <a href="basketball.php" class="menu-item <?php echo ($current_page == 'basketball') ? 'active' : ''; ?>">Basketball</a>
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