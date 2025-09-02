<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu Responsable chez Crazy Parieur - Prévention et Aide</title>
    <meta name="description" content="Découvrez le programme de jeu responsable de Crazy Parieur pour parier de manière sûre et responsable. Informations sur la prévention, signes de dépendance, outils et ressources d'aide en partenariat avec l'ANJ.">
    <meta name="author" content="Crazy Parieur">
    
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
                    <h1 class="page-title">Jeu Responsable - Prévention et Aide</h1>
                    
                    <?php include './text-container.php'; ?>
                    <?php
                    $introContent = '
                        <p>Chez Crazy Parieur, nous nous engageons à promouvoir un environnement de jeu sûr et responsable. Cette page présente nos ressources et informations pour vous aider à maintenir un contrôle sur vos activités de paris sportifs.</p>
                    ';
                    renderTextContainer('Notre Engagement', $introContent, 'intro');
                    
                    $preventionContent = '
                        <h3>Signes d\'Alerte</h3>
                        <ul>
                            <li>Passer de plus en plus de temps à parier</li>
                            <li>Parier des montants supérieurs à vos moyens</li>
                            <li>Négliger vos responsabilités familiales ou professionnelles</li>
                            <li>Mentir sur vos activités de jeu</li>
                            <li>Emprunter de l\'argent pour parier</li>
                        </ul>
                        
                        <h3>Conseils pour un Jeu Responsable</h3>
                        <ul>
                            <li>Fixez-vous des limites de temps et d\'argent</li>
                            <li>Ne pariez jamais sous l\'influence de l\'alcool ou de drogues</li>
                            <li>Considérez les paris comme un divertissement, pas comme un moyen de gagner de l\'argent</li>
                            <li>Prenez des pauses régulières</li>
                            <li>Demandez de l\'aide si vous ressentez une perte de contrôle</li>
                        </ul>
                    ';
                    renderTextContainer('Prévention', $preventionContent);
                    
                    $helpContent = '
                        <h3>Ressources d\'Aide</h3>
                        <p><strong>Joueurs Info Service :</strong> 09 74 75 13 13 (appel non surtaxé)</p>
                        <p><strong>Site web :</strong> <a href="#">www.joueurs-info-service.fr</a></p>
                        
                        <h3>Partenaires</h3>
                        <ul>
                            <li><strong>ANJ</strong> - Autorité Nationale des Jeux</li>
                            <li><strong>SOS Joueurs</strong> - Association d\'aide aux joueurs</li>
                            <li><strong>GambleAware</strong> - Prévention internationale</li>
                        </ul>
                        
                        <h3>Outils de Contrôle</h3>
                        <p>Sur les sites de nos partenaires, vous pouvez utiliser:</p>
                        <ul>
                            <li>Limites de dépôt</li>
                            <li>Limites de session</li>
                            <li>Auto-exclusion temporaire ou permanente</li>
                            <li>Tests d\'auto-évaluation</li>
                        </ul>
                    ';
                    renderTextContainer('Aide et Support', $helpContent, 'warning');
                    ?>
                </section>
            </div>
        </main>
        
        <?php include './footer.php'; ?>
        <?php include './cookies.php'; ?>
    </div>
</body>
</html>