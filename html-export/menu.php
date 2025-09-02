<?php
$current_page = basename($_SERVER['PHP_SELF'], '.php');
?>
<div class="menu-overlay" id="menuOverlay">
    <div class="menu-container">
        <div class="menu-header">
            <button class="menu-close" onclick="closeMenu()">
                <span class="close-icon">×</span>
                <span class="menu-text">Menu</span>
            </button>
        </div>
        
        <div class="menu-content">
            <div class="menu-items">
                <a href="index.php" class="menu-item <?php echo ($current_page == 'index') ? 'active' : ''; ?>">Accueil</a>
                <a href="golf.php" class="menu-item <?php echo ($current_page == 'golf') ? 'active' : ''; ?>">Golf</a>
                <a href="basketball.php" class="menu-item <?php echo ($current_page == 'basketball') ? 'active' : ''; ?>">Basketball</a>
            </div>
        </div>
    </div>
</div>

<script>
function openMenu() {
    document.getElementById('menuOverlay').classList.add('active');
    document.body.style.overflow = 'hidden'; // Prevent background scrolling
}

function closeMenu() {
    document.getElementById('menuOverlay').classList.remove('active');
    document.body.style.overflow = ''; // Restore scrolling
}

// Close menu when clicking overlay background
document.addEventListener('DOMContentLoaded', function() {
    const menuOverlay = document.getElementById('menuOverlay');
    if (menuOverlay) {
        menuOverlay.addEventListener('click', function(e) {
            if (e.target === this) {
                closeMenu();
            }
        });
    }
});

// Close menu with escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeMenu();
    }
});
</script>