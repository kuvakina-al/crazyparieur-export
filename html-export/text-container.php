<?php
// Reusable text container component
function renderTextContainer($title, $content, $variant = '') {
    $containerClass = 'text-container' . ($variant ? ' text-container-' . $variant : '');
    
    echo '<div class="' . $containerClass . '">';
    echo '<h2>' . $title . '</h2>';
    echo $content;
    echo '</div>';
}

// Main page content sections
function renderMainPageContent() {
    // All content in one Development Section
    $developmentContent = '
        <p>Salut! Tu es passionné de sport et tu veux te lancer dans les paris sportifs? Ou peut-être que tu cherches à améliorer tes stratégies? Bienvenue sur Crazy Parieur, ton guide pour comparer les meilleures offres de paris sportifs légaux en France. Que tu débutes ou que tu sois déjà expérimenté, tu vas trouver ce qu\'il te faut ici.</p>
        
        <p>Bienvenue sur Crazy Parieur, votre compagnon de confiance dans l\'univers des paris sportifs en ligne! Que vous soyez débutant ou parieur expérimenté, nous vous accompagnons avec des conseils d\'experts, des stratégies gagnantes et des comparatifs détaillés des meilleurs bookmakers du marché.</p>
        
        <h3>Pourquoi Choisir les Paris Sportifs Légaux en France?</h3>
        <p>La sécurité, c\'est primordial! Les paris sportifs légaux te garantissent un cadre réglementé et sécurisé, contrôlé par l\'Autorité Nationale des Jeux (ANJ). Ça assure que tes paris se déroulent dans des conditions équitables et que tes droits de consommateur sont respectés.</p>
        <p>En plus, choisir des opérateurs agréés te protège contre les arnaques et les manipulations de résultats.</p>
        
        <h3>Comparatif des Offres: Trouve les Meilleures Opportunités</h3>
        <p>Qui refuse une bonne affaire? Sur Crazy Parieur, on te présente les meilleures offres: bonus de bienvenue, cotes avantageuses, promotions... tout ce que proposent les sites de paris sportifs agréés en France. Compare pour maximiser tes chances.</p>
        
        <h3>Comment Choisir le Meilleur Site de Paris Sportifs?</h3>
        <p>Les critères essentiels: sécurité, variété des sports disponibles, qualité des cotes, facilité d\'utilisation, options de paiement pratiques et un service client réactif capable de répondre à tes questions.</p>
        
        <h3>Tout Savoir sur les Types de Paris</h3>
        <p>Nouveau dans le domaine? Pas de souci! Pari simple, combiné, pari système... on t\'explique tout pour que tu puisses jouer en toute confiance. Et pour les plus expérimentés, découvre des stratégies avancées pour optimiser tes gains.</p>
        
        <h3>Paris en Direct: L\'Art du Timing</h3>
        <p>Rien de plus excitant que de parier pendant le match! Observe le jeu, analyse les tendances et place ton pari en temps réel. C\'est là que ça devient vraiment passionnant.</p>
        
        <h3>Conseils pour un Jeu Responsable</h3>
        <p>Jouer, oui, mais intelligemment! Trois règles d\'or: fixe-toi des limites de temps et d\'argent, ne cours jamais après tes pertes, et considère les paris comme un loisir, pas comme un moyen de gagner sa vie.</p>
        
        <p>Rejoignez la communauté Crazy Parieur dès aujourd\'hui et transformez votre passion du sport en succès! Avec nos outils et conseils, vous êtes prêt à faire les meilleurs choix pour vos paris sportifs.</p>
        
        <p>Crazy Parieur est ton compagnon pour explorer l\'univers des paris sportifs en France. Avec nos comparaisons détaillées, nos conseils pratiques et notre approche légale et responsable, tu as tous les outils pour une expérience réussie. Prêt à commencer? C\'est parti!</p>
    ';
    renderTextContainer('Développement', $developmentContent);
}
?>