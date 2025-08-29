<?php
function renderTextContainer($title, $content, $variant = '') {
    $containerClass = 'text-container' . ($variant ? ' text-container-' . $variant : '');
    
    echo '<div class="' . $containerClass . '">';
    echo '<h2>' . $title . '</h2>';
    echo $content;
    echo '</div>';
}

function renderIntroSection() {
    $content = '
        <p>Crazy Parieur est une plateforme d\'affiliation spécialisée dans les paris sportifs. Le Site fournit des informations et des liens vers des sites partenaires de paris sportifs, sans proposer directement de services de jeux ou de paris.</p>
    ';
    renderTextContainer('Introduction', $content, 'intro');
}

function renderDevelopmentSection() {
    $content = '
        <h3>Pourquoi Choisir les Paris Sportifs Légaux en France?</h3>
        <p>Les paris sportifs légaux en France offrent un cadre réglementé et sécurisé, contrôlé par l\'Autorité Nationale des Jeux (ANJ) et assure que les paris se déroulent dans des conditions équitables et que les droits de consommateur sont respectés.</p>
        
        <h3>Comment Nous Trouvons les Meilleures Opportunités</h3>
        <p>Sur notre site affilié Sur Crazy Parieur, on se prénomme les meilleures offres bonus de bienvenue créent des stratégies personnalisées, promouvons les événements promotionnels, analysons et comparons quotidiennement les taux de paris sportifs légaux...</p>
        
        <h3>Comment Choisir le Meilleur Site de Paris Sportifs?</h3>
        <p>Les critères essentiels de qualité vérifiés des sports disponibles, options de paiement, facilité et vitesse, sécurité détaillée de logique et les sites des offres promotionnelles et un service client réactif qui répond à tes questions.</p>
    ';
    renderTextContainer('Développement', $content);
}

function renderConclusionSection() {
    $content = '
        <p>Crazy Parieur est votre compagnon pour explorer l\'univers des paris sportifs en France. Avec nos comparaisons détaillées, nos conseils pratiques et notre approche légale et responsable, tu as tous les outils pour une expérience enrichie. Prêt à commencer? C\'est parti!</p>
    ';
    renderTextContainer('Conclusion', $content, 'conclusion');
}
?>