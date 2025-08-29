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
                    <h1>Paris Sportifs Faciles et Rapides - Crazy Parieur</h1>
                    <p style="text-align: center; font-size: 16px; margin-bottom: 40px;">Crazy Parieur vous propose un accompagnement complet: astuces, stratégies et comparatifs pour réussir vos paris sportifs en ligne.</p>
                    
                    <!-- Bookmaker Cards -->
                    <div class="cards-container">
                        <?php include './card.php'; ?>
                        <?php
                        renderCard(
                            'Parions Sport.png',
                            'ParionsSport',
                            '100%',
                            'JUSQU\'À 100€',
                            '+1ER PARI REMBOURSÉ',
                            'OBTENEZ LE BONUS',
                            'https://www.enligne.parionssport.fdj.fr/?utm=Q7dK2a9tX3',
                            ['Retrait rapide', 'Bonus Exclusif', 'Aucune mise'],
                            'pattern'
                        );
                        
                        renderCard(
                            'Winamax.png',
                            'Winamax',
                            '200%',
                            'JUSQU\'À 200€',
                            '+1ER PARI REMBOURSÉ',
                            'OBTENEZ LE BONUS',
                            'https://www.winamax.fr/?utm=z5C1Y8H4mV',
                            ['Retrait rapide', 'Bonus Exclusif', 'Aucune mise'],
                            'pattern'
                        );
                        
                        renderCard(
                            'NetBet.png',
                            'NetBet',
                            '150%',
                            'JUSQU\'À 150€',
                            '+1ER PARI REMBOURSÉ',
                            'OBTENEZ LE BONUS',
                            'https://www.netbet.fr/?utm=Px3u0N6T7A',
                            ['Retrait rapide', 'Bonus Exclusif', 'Aucune mise'],
                            'pattern'
                        );
                        ?>
                    </div>
                    
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