<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Découvrez l'Autorité Nationale des Jeux (ANJ) - Crazy Parieur</title>
    <meta name="description" content="Comprendre le rôle de l'Autorité Nationale des Jeux (ANJ) en France, depuis la réglementation des paris sportifs jusqu'à la protection des joueurs. Visitez Crazy Parieur pour des informations détaillées.">
    <meta name="author" content="Crazy Parieur">
    
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
        <?php include './components/navbar.php'; ?>
        <?php include './components/menu.php'; ?>
        
        <main class="main-content">
            <div class="container">
                <section class="section">
                    <h1>Découvrez l'Autorité Nationale des Jeux (ANJ)</h1>
                    
                    <?php include './components/text-container.php'; ?>
                    <?php
                    $introContent = '
                        <p>L\'Autorité Nationale des Jeux (ANJ) est l\'organisme français de régulation des jeux d\'argent et de hasard. Créée en 2020, elle succède à l\'ARJEL et élargit ses compétences à l\'ensemble du secteur des jeux.</p>
                    ';
                    renderTextContainer('Qu\'est-ce que l\'ANJ ?', $introContent);
                    
                    $missionContent = '
                        <h3>Missions Principales</h3>
                        <ul>
                            <li>Réguler et contrôler les opérateurs de jeux en ligne</li>
                            <li>Délivrer les licences d\'exploitation</li>
                            <li>Protéger les joueurs, notamment les mineurs</li>
                            <li>Lutter contre le jeu illégal</li>
                            <li>Prévenir l\'addiction au jeu</li>
                            <li>Assurer la transparence des opérations</li>
                        </ul>
                        
                        <h3>Domaines de Compétence</h3>
                        <p>L\'ANJ régule plusieurs secteurs :</p>
                        <ul>
                            <li>Paris sportifs en ligne</li>
                            <li>Poker en ligne</li>
                            <li>Jeux de loterie</li>
                            <li>Jeux dans les casinos physiques</li>
                        </ul>
                    ';
                    renderTextContainer('Missions de l\'ANJ', $missionContent);
                    
                    $protectionContent = '
                        <h3>Protection des Joueurs</h3>
                        <p>L\'ANJ met en place des mesures strictes pour protéger les joueurs :</p>
                        <ul>
                            <li>Vérification de l\'âge et de l\'identité</li>
                            <li>Outils de limitation et d\'auto-exclusion</li>
                            <li>Contrôle de la publicité</li>
                            <li>Sensibilisation aux risques</li>
                            <li>Partenariats avec des associations d\'aide</li>
                        </ul>
                        
                        <h3>Sanctions et Contrôles</h3>
                        <p>L\'ANJ dispose de pouvoirs de sanction :</p>
                        <ul>
                            <li>Contrôles sur site et à distance</li>
                            <li>Amendes administratives</li>
                            <li>Suspension ou retrait de licence</li>
                            <li>Blocage des sites illégaux</li>
                        </ul>
                        
                        <h3>Contact ANJ</h3>
                        <p><strong>Site officiel :</strong> <a href="https://anj.fr" target="_blank">www.anj.fr</a></p>
                        <p><strong>Adresse :</strong> 99-101 rue Leblanc, 75015 Paris</p>
                        <p><strong>Téléphone :</strong> 01 49 09 87 00</p>
                    ';
                    renderTextContainer('Protection et Contrôle', $protectionContent, 'warning');
                    ?>
                </section>
            </div>
        </main>
        
        <?php include './components/footer.php'; ?>
        <?php include './components/cookies.php'; ?>
    </div>
</body>
</html>