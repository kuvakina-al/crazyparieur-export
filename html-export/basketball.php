<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gagnez Gros avec Vos Paris sur le Basketball - Crazy Parieur</title>
    <meta name="description" content="Dribblez à travers nos astuces, comparatifs des meilleurs bookmakers et conseils d'expert pour maximiser vos gains en pariant sur le basketball!">
    <meta name="author" content="Crazy Parieur">
    
    <!-- Open Graph -->
    <meta property="og:title" content="Gagnez Gros avec Vos Paris sur le Basketball - Crazy Parieur">
    <meta property="og:description" content="Dribblez à travers nos astuces, comparatifs des meilleurs bookmakers et conseils d'expert pour maximiser vos gains en pariant sur le basketball!">
    <meta property="og:type" content="website">
    
    <!-- CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;900&family=Barlow+Condensed:wght@400;700&display=swap">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/cookies.css">
    <link rel="stylesheet" href="css/card.css">
    <link rel="stylesheet" href="css/text-container.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
    <div class="site-wrapper">
        <?php include './navbar.php'; ?>
        <?php include './menu.php'; ?>
        
        <main class="main-content">
            <div class="container">
                <section class="section">
                    <h1 class="page-title">Dunk sur les Cotes - Votre Guide pour Parier sur le Basketball</h1>
                    <p class="page-subtitle">Crazy Parieur vous propose un accompagnement complet: astuces, stratégies et comparatifs pour réussir vos paris de basketball en ligne.</p>
                    
                    <!-- Green Frame with Checkbox -->
                    <div class="bonus-frame">
                        <div class="checkbox-container">
                            <svg width="12.61" height="10.36" viewBox="0 0 13 11" class="checkmark">
                                <path d="M1 5.5L5 9.5L12 1.5" stroke="#0A1020" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="bonus-text">Découvrez la plus grande sélection des meilleures offres de bonus</span>
                    </div>
                    
                    <!-- Bookmaker Cards -->
                    <?php include './card.php'; ?>
                    <?php renderCardsContainer(); ?>
                    
                    <!-- Main Content Container -->
                    <div class="main-content-container">
                        <?php include './text-container.php'; ?>
                        <?php renderBasketballPageContent(); ?>
                    </div>
                </section>
            </div>
        </main>
        
        <?php include './footer.php'; ?>
        <?php include './cookies.php'; ?>
    </div>
</body>
</html>