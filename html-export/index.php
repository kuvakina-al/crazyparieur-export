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
                    <h1>Paris Sportifs Faciles et Rapides</h1>
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
                            ['Retrait rapide', 'Bonus Exclusif', 'Aucune mise']
                        );
                        
                        renderCard(
                            'Winamax.png',
                            'Winamax',
                            '200%',
                            'JUSQU\'À 200€',
                            '+1ER PARI REMBOURSÉ',
                            'OBTENEZ LE BONUS',
                            'https://www.winamax.fr/?utm=z5C1Y8H4mV',
                            ['Retrait rapide', 'Bonus Exclusif', 'Aucune mise']
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
                    
                    <!-- Text Content -->
                    <?php include './text-container.php'; ?>
                    <?php
                    renderIntroSection();
                    renderDevelopmentSection();
                    renderConclusionSection();
                    ?>
                </section>
            </div>
        </main>
        
        <?php include './footer.php'; ?>
        <?php include './cookies.php'; ?>
    </div>
</body>
</html>