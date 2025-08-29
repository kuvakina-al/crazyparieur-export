<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditions Générales d'Utilisation - Crazy Parieur</title>
    <meta name="description" content="Consultez les Conditions Générales d'Utilisation (CGU) du site Crazy Parieur, votre guide expert pour l'affiliation de paris sportifs. Découvrez nos services et nos engagements en matière de protection des données et de responsabilité.">
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
        <?php include './navbar.php'; ?>
        <?php include './menu.php'; ?>
        
        <main class="main-content">
            <div class="container">
                <section class="section">
                    <h1>Conditions Générales d'Utilisation de Crazy Parieur</h1>
                    
                    <?php include './text-container.php'; ?>
                    <?php
                    $introContent = '
                        <h3>Présentation du Site</h3>
                        <p>Crazy Parieur est une plateforme d\'affiliation spécialisée dans les paris sportifs. Le Site fournit des informations et des liens vers des sites partenaires de paris sportifs, sans proposer directement de services de jeux ou de paris.</p>
                        
                        <h3>Services Proposés</h3>
                        <p>Le Site propose les services suivants :</p>
                        <ul>
                            <li>Redirection vers des sites de paris sportifs partenaires</li>
                            <li>Publication d\'analyses, de statistiques et de conseils relatifs aux paris sportifs</li>
                            <li>Présentation des offres promotionnelles et bonus proposés par nos partenaires</li>
                        </ul>
                    ';
                    renderTextContainer('Introduction', $introContent);
                    
                    $responsabilityContent = '
                        <h3>Responsabilité de l\'Utilisateur</h3>
                        <p>L\'utilisateur s\'engage à ne pas utiliser le Site pour des activités illégales et à respecter les lois et règlements en vigueur. L\'utilisateur reconnaît qu\'il doit vérifier que la législation de son pays l\'autorise à utiliser les services des sites partenaires.</p>
                        
                        <h3>Responsabilité du Site</h3>
                        <p>Crazy Parieur agit en tant qu\'intermédiaire et ne peut être tenu responsable des actions émises sur les politiques des sites partenaires. Le Site décline toute responsabilité concernant les pertes financières ou dommages indirects résultant de l\'utilisation des services proposés par nos sites partenaires.</p>
                        
                        <h3>Limitations</h3>
                        <p>Les informations communiquées sur le Site sont fournies à titre informatif. Bien que nous nous efforcions de les maintenir exactes et à jour, des inexactitudes ou des omissions peuvent survenir.</p>
                    ';
                    renderTextContainer('Responsabilités', $responsabilityContent);
                    
                    $finalContent = '
                        <h3>Propriété Intellectuelle</h3>
                        <p>L\'ensemble du Site, y inclus textes, graphismes, logos, images, ainsi que leur sélection et agencement, sont la propriété exclusive de Crazy Parieur, sauf mention contraire. Toute reproduction non autorisée de ces contenus, totale ou partielle, est interdite et donnera lieu à des poursuites civiles et/ou pénales.</p>
                        
                        <h3>Protection des Données et Vie Privée</h3>
                        <p>Crazy Parieur respecte la vie privée de ses utilisateurs et s\'engage à protéger les données personnelles. Conformément au Règlement Général sur la Protection des Données (RGPD), le Site ne collecte aucune donnée personnelle, ne pratique aucun profilage et n\'utilise aucun cookie de suivi personnel.</p>
                        
                        <h3>Droit Applicable et Juridiction</h3>
                        <p>Les présentes CGU sont régies par le droit français. Tout litige relatif à leur interprétation ou exécution relèvera des tribunaux compétents en France.</p>
                        
                        <h3>Modifications des CGU</h3>
                        <p>Nous nous réservons le droit de modifier ces CGU à tout moment. Les modifications prendront effet dès leur publication sur le Site et il appartient à l\'utilisateur de consulter régulièrement les CGU pour se tenir informé des éventuelles modifications.</p>
                        
                        <h3>Contact</h3>
                        <p>Pour toute question ou réclamation concernant les CGU ou les services du Site, contactez-nous à : contact@crazy-parieur.fr</p>
                        
                        <h3>Dispositions Finales</h3>
                        <p>Merci de visiter Crazy Parieur. Nous espérons que notre site répondra à vos attentes en matière d\'information sur les paris sportifs et vous accompagnera dans vos démarches.</p>
                        <p>Le présent texte constitue l\'intégralité des Conditions Générales d\'Utilisation du site Crazy Parieur et remplace tout accord antérieur relatif à ces conditions.</p>
                    ';
                    renderTextContainer('Dispositions Légales', $finalContent);
                    ?>
                </section>
            </div>
        </main>
        
        <?php include './footer.php'; ?>
        <?php include './cookies.php'; ?>
    </div>
</body>
</html>