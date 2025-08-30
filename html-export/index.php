<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paris Sportifs Faciles et Rapides - Crazy Parieur</title>
    <meta name="description" content="Crazy Parieur vous propose un accompagnement complet: astuces, stratégies et comparatifs pour réussir vos paris sportifs en ligne.">
    <meta name="author" content="Crazy Parieur">
    
    <!-- Open Graph -->
    <meta property="og:title" content="Paris Sportifs Faciles et Rapides - Crazy Parieur">
    <meta property="og:description" content="Crazy Parieur vous propose un accompagnement complet: astuces, stratégies et comparatifs pour réussir vos paris sportifs en ligne.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://crazy-parieur.fr">
    
    <!-- CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;900&family=Barlow+Condensed:wght@400;700&display=swap">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/cookies.css">
    <link rel="stylesheet" href="css/card.css">
    <link rel="stylesheet" href="css/text-container.css">
</head>
<body>
    <div class="site-wrapper">
        <?php include './navbar.php'; ?>
        <?php include './menu.php'; ?>
        
        <main class="main-content">
            <div class="container">
                <section class="section">
                    <h1 style="font-family: 'Montserrat', sans-serif; font-weight: 900; font-size: 38px; line-height: 120%; letter-spacing: 0%; text-align: center; color: #00ff41; margin-bottom: 15px;">Paris Sportifs Faciles et Rapides - Crazy Parieur</h1>
                    <p style="font-family: 'Montserrat', sans-serif; font-weight: 300; font-size: 20px; line-height: 120%; letter-spacing: 0%; text-align: center; color: #FFFFFF; margin-bottom: 20px;">Crazy Parieur vous propose un accompagnement complet: astuces, stratégies et comparatifs pour réussir vos paris sportifs en ligne.</p>
                    
                    <!-- Green Frame with Checkbox -->
                    <div style="display: flex; align-items: center; justify-content: center; margin: 20px auto 40px auto; max-width: 506px; height: 48px; background: linear-gradient(180deg, #1E2334 0%, #0A1020 100%); border-radius: 999px; padding: 12px 24px; gap: 12px;">
                        <div style="width: 24px; height: 24px; background-color: #04FF25; border: 1px solid #04FF25; border-radius: 4px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <svg width="12.61" height="10.36" viewBox="0 0 13 11" style="margin-top: 3.25px; margin-left: 1.86px;">
                                <path d="M1 5.5L5 9.5L12 1.5" stroke="#0A1020" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span style="font-family: 'Montserrat', sans-serif; font-size: 14px; color: #FFFFFF; white-space: nowrap;">Découvrez la plus grande sélection des meilleures offres de bonus</span>
                    </div>
                    
                    <!-- Bookmaker Cards -->
                    <?php include './card.php'; ?>
                    <?php renderCardsContainer(); ?>
                    
                    <!-- Main Content -->
                    <?php include './text-container.php'; ?>
                    <?php
                    $introContent = '
                        <p>Bienvenue sur Crazy Parieur, votre compagnon de confiance dans l\'univers des paris sportifs en ligne! Que vous soyez débutant ou parieur expérimenté, nous vous accompagnons avec des conseils d\'experts, des stratégies gagnantes et des comparatifs détaillés des meilleurs bookmakers du marché.</p>
                    ';
                    renderTextContainer('Introduction', $introContent, 'intro');
                    
                    $developmentContent = '
                        <h3>Notre Mission</h3>
                        <p>Chez Crazy Parieur, nous croyons que parier doit être une expérience enrichissante et responsable. Notre équipe d\'experts analyse quotidiennement les meilleures opportunités, compare les offres des bookmakers et partage avec vous les stratégies les plus efficaces pour maximiser vos gains.</p>
                        
                        <h3>Nos Services</h3>
                        <p>Découvrez nos analyses approfondies, nos guides détaillés pour chaque sport, et nos comparatifs exclusifs des bonus et promotions. Nous couvrons tous les sports populaires : football, basketball, tennis, golf et bien plus encore.</p>
                        
                        <h3>Pourquoi Nous Choisir</h3>
                        <p>Avec des années d\'expérience dans le domaine des paris sportifs, notre équipe vous offre une expertise inégalée. Nos conseils sont basés sur des analyses rigoureuses et une connaissance approfondie du marché des paris en ligne.</p>
                    ';
                    renderTextContainer('Développement', $developmentContent);
                    
                    $conclusionContent = '
                        <p>Rejoignez la communauté Crazy Parieur dès aujourd\'hui et transformez votre passion du sport en succès! Avec nos outils et conseils, vous êtes prêt à faire les meilleurs choix pour vos paris sportifs.</p>
                    ';
                    renderTextContainer('Conclusion', $conclusionContent, 'conclusion');
                    ?>
                </section>
            </div>
        </main>
        
        <?php include './footer.php'; ?>
        <?php include './cookies.php'; ?>
    </div>
</body>
</html>