<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politique de Confidentialité de Crazy Parieur</title>
    <meta name="description" content="Consultez notre Politique de Confidentialité pour comprendre comment Crazy Parieur respecte votre vie privée. Aucune collecte de données personnelles, conformité RGPD.">
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
                    <h1>Politique de Confidentialité</h1>
                    
                    <?php include './components/text-container.php'; ?>
                    <?php
                    $introContent = '
                        <p>Crazy Parieur respecte votre vie privée et s\'engage à protéger vos données personnelles. Cette politique explique comment nous collectons, utilisons et protégeons vos informations.</p>
                    ';
                    renderTextContainer('Introduction', $introContent);
                    
                    $dataContent = '
                        <h3>Données Collectées</h3>
                        <p>Nous collectons uniquement les données nécessaires au fonctionnement de notre service :</p>
                        <ul>
                            <li>Informations de navigation (cookies techniques)</li>
                            <li>Données de trafic anonymisées</li>
                            <li>Aucune donnée personnelle identifiable</li>
                        </ul>
                        
                        <h3>Utilisation des Données</h3>
                        <p>Les données collectées sont utilisées pour :</p>
                        <ul>
                            <li>Améliorer l\'expérience utilisateur</li>
                            <li>Analyser le trafic du site</li>
                            <li>Assurer la sécurité du site</li>
                        </ul>
                    ';
                    renderTextContainer('Gestion des Données', $dataContent);
                    
                    $rightsContent = '
                        <h3>Vos Droits RGPD</h3>
                        <p>Conformément au RGPD, vous disposez des droits suivants :</p>
                        <ul>
                            <li>Droit d\'accès à vos données</li>
                            <li>Droit de rectification</li>
                            <li>Droit à l\'effacement</li>
                            <li>Droit à la portabilité</li>
                            <li>Droit d\'opposition</li>
                        </ul>
                        
                        <h3>Cookies</h3>
                        <p>Nous utilisons des cookies pour améliorer votre expérience. Vous pouvez les accepter ou les refuser via notre bandeau de cookies.</p>
                        
                        <h3>Contact</h3>
                        <p>Pour toute question concernant cette politique, contactez-nous à : contact@crazy-parieur.fr</p>
                    ';
                    renderTextContainer('Vos Droits', $rightsContent);
                    ?>
                </section>
            </div>
        </main>
        
        <?php include './components/footer.php'; ?>
        <?php include './components/cookies.php'; ?>
    </div>
</body>
</html>