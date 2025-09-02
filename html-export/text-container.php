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
    $mainContent = '
        <h2>Introduction</h2>
        <p>Salut! Tu es passionné de sport et tu veux te lancer dans les paris sportifs? Ou peut-être que tu cherches à améliorer tes stratégies? Bienvenue sur Crazy Parieur, ton guide pour comparer les meilleures offres de paris sportifs légaux en France. Que tu débutes ou que tu sois déjà expérimenté, tu vas trouver ce qu\'il te faut ici.</p>
        
        <h2>Développement</h2>
        
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
        
        <h2>Conclusion</h2>
        <p>Crazy Parieur est ton compagnon pour explorer l\'univers des paris sportifs en France. Avec nos comparaisons détaillées, nos conseils pratiques et notre approche légale et responsable, tu as tous les outils pour une expérience réussie. Prêt à commencer? C\'est parti!</p>
    ';
    renderTextContainer('', $mainContent);
}

// Golf page content
function renderGolfPageContent() {
    $golfContent = '
        <p>Imaginez le bruit sourd de la balle qui frappe le club, le silence concentré du green sous le soleil, l\'éventail d\'un par impeccable sur le parcours. Chez Crazy Parieur, nous transformons cette passion pour le golf en aventure à la fois ludique et potentiellement lucrative. Nous vous offrons non seulement une expérience enrichissante mais aussi une diversité d\'opportunités de paris.</p>
        
        <h3>Comprendre les Paris sur le Golf</h3>
        <p>Parier sur le golf, ce n\'est pas jouer à l\'aveuglette ; c\'est un art subtil qui demande réflexion et précision. Comme un bon swing, un bon pari nécessite de maîtriser plusieurs éléments : les types de paris, les parcours et le format des tournois.</p>
        <p>Le \'pari vainqueur\' consiste à prédire qui remportera le tournoi, tandis que le \'head-to-head\' vous fait choisir entre deux golfeurs. Sans oublier les paris sur le "hole-in-one", particulièrement excitants et souvent lucratifs de par leur rareté.</p>
        <p>Le golf offre une richesse stratégique unique car chaque parcours et chaque journée de tournoi apportent leurs variations, influençant les résultats de manière parfois surprenante.</p>

        <h3>Comparatif des Bookmakers</h3>
        <p>Choisir le bon bookmaker est aussi important que sélectionner le bon club pour un par 5 difficile. Certains sites proposent des cotes exceptionnelles pour les tournois majeurs, tandis que d\'autres séduisent par leurs promotions sur le "hole-in-one".</p>
        <p>Nous avons analysé l\'offre pour vous présenter les meilleurs bookmakers qui maximiseront vos gains sur le golf. Attention aux marges et à la diversité des paris proposés, ces critères peuvent faire la différence entre un pari sous le par ou au-dessus!.</p>
        
        <h3>Conseils d\'Experts</h3>
        <p>Notre équipe d\'experts vous guide à travers les obstacles et les opportunités des paris golf. Premièrement, connaissez le parcours. Les conditions météo comme le vent et la pluie peuvent complètement modifier la donne d\'un tournoi.</p>
        <p>Deuxièmement, étudiez les joueurs : leur forme récente, leurs performances sur des parcours similaires, et même leur historique dans certaines conditions climatiques. Troisièmement, ne pariez jamais sous le coup de l\'émotion; la patience reste votre meilleur atout, au golf comme aux paris.</p>
        
        <h3>Jeu Responsable</h3>
        <p>Parier sur votre sport favori peut apporter du piment, mais cela doit rester une activité plaisante et sécurisée. Chez Crazy Parieur, nous défendons le jeu responsable. Fixez-vous des limites, ne pariez jamais plus que ce que vous pouvez vous permettre de perdre et accordez-vous des pauses régulières.</p>
        <p>Comme au golf, chaque partie est différente et il faut savoir quand prendre du recul pour revenir plus fort.</p>
    
        <h2>FAQ sur les Paris Golf</h2>
        <h3>Quels sont les types de paris les plus courants au golf?</h3>
        <p>Les paris les plus populaires incluent le vainqueur du tournoi, les paris face-à-face, et les paris sur les performances par trou.</p>
        
        <h3>Comment la météo affecte-t-elle les paris?</h3>
        <p>Le vent, la pluie et autres conditions peuvent considérablement influencer les scores et la performance des joueurs. Adaptez vos paris en conséquence!</p>
        
        <h3>Y a-t-il des tournois de golf plus prévisibles?</h3>
        <p>Les tournois avec un long historique, comme les Majeurs, fournissent généralement plus de données pour des prédictions éclairées.</p>
        
        <h3>Combien devrais-je parier sur un tournoi de golf?</h3>
        <p>Cela dépend de votre budget personnel; ne risquez jamais plus que ce que vous pouvez vous permettre de perdre.</p>
        
        <h3>Est-il possible de parier en direct sur le golf?</h3>
        <p>Oui, de nombreux bookmakers proposent des paris en direct qui permettent de profiter des rebondissements inattendus pendant les tournois.</p>
        
        <h3>Des conseils pour débuter dans les paris golf?</h3>
        <p>Commencez par des paris simples et renseignez-vous bien sur le sport et les conditions de jeu avant d\'augmenter vos mises.</p>
        

        <h2>Prêt à Viser le Green?</h2>
        <p>Que vous soyez là pour l\'adrénaline ou simplement pour pimenter votre sport préféré, Crazy Parieur est votre partenaire dans cette aventure des paris golf. Donnez du relief à vos journées en pariant sur vos tournois favoris.</p>
        <p>Alors, prêt à viser de nouveaux gains? Rejoignez notre communauté et transformez vos intuitions en victoires. Avec nous, visez le drapeau, et qui sait? Le hole-in-one parfait vous attend peut-être!</p>

        ';
    renderTextContainer('Développement', $golfContent);
}

// Basketball page content
function renderBasketballPageContent() {
    $basketballContent = '
        <p>Amateurs de basketball et de sensations fortes! Vous êtes dans le bon endroit pour transformer votre passion en gains réels. Que vous soyez fan de NBA, d\'Euroligue ou d\'autres championnats, chaque dribble et chaque panier à trois points peut générer des opportunités. Avec Crazy Parieur, vous maximisez vos expériences dans le royaume des paris de basketball.</p>
        
        <h3>Comprendre les Paris sur le Basketball</h3>
        <p>Parier dans l\'univers du basketball, c\'est comprendre le rythme de ce sport unique. Les matchs sont composés de plusieurs quart-temps, chacun offrant des opportunités de paris uniques. Du pari simple sur le vainqueur aux paris sur le total de points (over/under), en passant par les handicaps, les possibilités sont nombreuses. Le basketball offre une richesse tactique incomparable.</p>
        
        <h3>Comparatif des Bookmakers</h3>
        <p>Parmi tous les bookmakers présents aujourd\'hui sur le marché, comment choisir? Sur Crazy Parieur, nous vous proposons des comparaisons détaillées des meilleurs sites de paris sportifs spécialisés pour le basketball. Formats de paris, promotions spécifiques, cotes compétitives - vous trouvez ici tous les outils nécessaires pour faire le bon choix.</p>
        
        <h3>Conseils d\'Experts</h3>
        <p>Nos experts vous partagent des stratégies spécialisées pour maximiser vos chances. Apprenez à diversifier vos paris, analysez les statistiques des équipes et suivez la forme actuelle des joueurs. Par exemple, l\'étude des matchs à domicile contre ceux qui se déroulent à l\'extérieur peut vous donner un avantage décisif.</p>
        
        <h3>Jeu Responsable</h3>
        <p>Parier sur le basketball, c\'est passionnant, mais il faut rester prudent. Chez Crazy Parieur, nous mettons l\'accent sur les pratiques de jeu responsable. Consultez nos guides sur la gestion responsable des paris et n\'hésitez pas à demander de l\'aide si nécessaire.</p>
        
        <p>Le basketball vous accompagne dans votre engagement sportif avec Crazy Parieur. Nos experts vous guident à travers des stratégies et outils détaillés pour maximiser vos chances. Avec notre approche légale et responsable, vous avez tous les outils pour une expérience réussie. Prêt à commencer? C\'est parti!</p>
    ';
    renderTextContainer('Développement', $basketballContent);
}

// Privacy Policy content - PLACEHOLDER - Please provide Figma content
function renderPrivacyPolicyContent() {
    $privacyContent = '
        <p>[PLACEHOLDER - Please provide the text content from Figma for the Privacy Policy page]</p>
        
        <h3>Introduction</h3>
        <p>[Content needed from Figma]</p>
        
        <h3>Collecte de Données</h3>
        <p>[Content needed from Figma]</p>
        
        <h3>Utilisation des Données</h3>
        <p>[Content needed from Figma]</p>
        
        <h3>Droits des Utilisateurs</h3>
        <p>[Content needed from Figma]</p>
        
        <h3>Contact</h3>
        <p>[Content needed from Figma]</p>
    ';
    renderTextContainer('Développement', $privacyContent);
}

// Responsible Gaming content - PLACEHOLDER - Please provide Figma content
function renderResponsibleGamingContent() {
    $responsibleContent = '
        <p>[PLACEHOLDER - Please provide the text content from Figma for the Responsible Gaming page]</p>
        
        <h3>Notre Engagement</h3>
        <p>[Content needed from Figma]</p>
        
        <h3>Prévention</h3>
        <p>[Content needed from Figma]</p>
        
        <h3>Signes de Dépendance</h3>
        <p>[Content needed from Figma]</p>
        
        <h3>Aide et Support</h3>
        <p>[Content needed from Figma]</p>
    ';
    renderTextContainer('Développement', $responsibleContent);
}

// ANJ content - PLACEHOLDER - Please provide Figma content  
function renderANJContent() {
    $anjContent = '
        <p>[PLACEHOLDER - Please provide the text content from Figma for the ANJ page]</p>
        
        <h3>Qu\'est-ce que l\'ANJ ?</h3>
        <p>[Content needed from Figma]</p>
        
        <h3>Missions de l\'ANJ</h3>
        <p>[Content needed from Figma]</p>
        
        <h3>Protection des Joueurs</h3>
        <p>[Content needed from Figma]</p>
        
        <h3>Contact</h3>
        <p>[Content needed from Figma]</p>
    ';
    renderTextContainer('Développement', $anjContent);
}

// Terms of Use content - PLACEHOLDER - Please provide Figma content
function renderTermsOfUseContent() {
    $termsContent = '
        <p>[PLACEHOLDER - Please provide the text content from Figma for the Terms of Use page]</p>
        
        <h3>Introduction</h3>
        <p>[Content needed from Figma]</p>
        
        <h3>Utilisation du Site</h3>
        <p>[Content needed from Figma]</p>
        
        <h3>Responsabilités</h3>
        <p>[Content needed from Figma]</p>
        
        <h3>Dispositions Légales</h3>
        <p>[Content needed from Figma]</p>
    ';
    renderTextContainer('Développement', $termsContent);
}
?>