<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditions Générales d'Utilisation - Crazy Parieur</title>
    <meta name="description" content="Consultez les Conditions Générales d'Utilisation (CGU) du site Crazy Parieur, votre guide expert pour l'affiliation de paris sportifs. Découvrez nos services et nos engagements en matière de protection des données et de responsabilité.">
    <meta name="author" content="Crazy Parieur">
    
    <!-- CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;900&family=Barlow+Condensed:wght@400;700&display=swap">
    <link rel="stylesheet" href="css/styles.css">
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
                    <h1 class="page-title-legal">Conditions Générales d'Utilisation de Crazy Parieur</h1>
                    
                    <!-- Main Content Container -->
                    <div class="main-content-container">
                        <?php include './text-container.php'; ?>
                        <?php renderTermsOfUseContent(); ?>
                    </div>
                </section>
            </div>
        </main>
        
        <?php include './footer.php'; ?>
        <?php include './cookies.php'; ?>
    </div>
</body>
</html>