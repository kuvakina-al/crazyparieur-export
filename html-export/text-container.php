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
    renderTextContainer('', $golfContent);
}

// Basketball page content
function renderBasketballPageContent() {
    $basketballContent = '
        <p>Amateur de basketball et de sensations fortes? Parfait! Vous êtes au bon endroit pour transformer votre passion en gains réels. Que vous suiviez la NBA, l\'Euroligue ou d\'autres championnats, chaque dribble et chaque panier à trois points peuvent non seulement vous faire vibrer mais aussi vous rapporter gros! Sur Crazy Parieur, nous vous proposons le meilleur des paris sportifs spécialisés en basketball. Alors, installez-vous confortablement, le spectacle va commencer!</p>
        
        <h3>Comprendre les Paris sur le Basketball</h3>
        <p>Plongez dans l\'univers des paris basketball où chaque match est une occasion de marquer des points. Pour commencer, familiarisez-vous avec les types de paris essentiels: le pari simple sur le vainqueur, les paris sur le total de points (plus/moins), ou encore les paris sur les performances individuelles.</p>
        <p>Mais attention! Chaque ligue a ses particularités. Les scores en NBA sont généralement plus élevés qu\'en FIBA par exemple. Autre élément crucial: surveillez les blessures et les transferts qui peuvent complètement bouleverser l\'équilibre d\'une équipe. L\'historique des confrontations directes peut aussi vous donner de précieux indices sur l\'issue probable des matchs.</p>
        
        <h3>Comparatif des Bookmakers</h3>
        <p>Choisir le bon bookmaker est aussi important qu\'avoir un bon coach. Sur Crazy Parieur, vous trouverez des comparaisons détaillées des meilleurs sites de paris sportifs: cotes pour le basketball, bonus de bienvenue, promotions spécifiques, facilité d\'utilisation et fiabilité. Que vous préfériez les paris simples ou les combinés, nos analyses vous aident à faire le bon choix.</p>
        
        <h3>Conseils d\'Experts</h3>
        <p>Un bon parieur est un parieur bien informé. Nos experts vous guident à travers des stratégies éprouvées pour maximiser vos chances. Pensez à diversifier vos paris, analysez les statistiques des équipes et suivez la forme actuelle des joueurs.</p>
        <p>La victoire ne repose pas uniquement sur la chance : la préparation reste votre meilleur atout. En basketball, chaque détail compte, alors restez attentif aux moindres changements qui peuvent influencer un match.</p>
        <h3>Jeu Responsable</h3>
        <p>Parier sur le basketball, c\'est excitant, mais ça doit rester un plaisir. Chez Crazy Parieur, nous encourageons des pratiques de jeu responsable en vous fournissant les outils nécessaires pour parier en sécurité. Fixez-vous des limites de temps et d\'argent, et n\'hésitez pas à demander de l\'aide si nécessaire. Le jeu doit être source de divertissement, pas de problèmes.</p>
        
        
        <h2>FAQ Basketball</h2>
        <p><strong>Q1: Quel est le meilleur moment pour placer un pari sur le basketball ?</strong> </p>
        <p><strong>R1: </strong> Juste avant le match, quand les compositions d\'équipes sont annoncées.</p> 
        
        <p><strong>Q2: Y a-t-il des paris en direct sur le basketball?</strong></p>
        <p><strong>R2: </strong> Oui, et ils peuvent être très intéressants grâce aux changements de score rapides.</p>
        
        <p><strong>Q3: Comment suivre les statistiques importantes pour mes paris?</strong></p>
        <p><strong>R3: </strong> Les sites spécialisés et les applications officielles des ligues sont vos meilleurs alliés.</p>
        
        <p><strong>Q4: Comment éviter le piège des cotes trop attrayantes?</strong> </p>
        <p><strong>R4: </strong> Toujours analyser le match en profondeur et éviter les paris impulsifs.</p> 
        
        <p><strong>Q5: Peut-on parier sur des ligues étrangères?</strong></p>
        <p><strong>R5: </strong> Oui, la plupart des bookmakers proposent de nombreuses ligues internationales.</p>
        
        <p><strong>Q6: Peut-on avoir des conseils personnalisés?</strong></p>
        <p><strong>R6: </strong> Oui, beaucoup de sites offrent des analyses et conseils adaptés à votre profil.</p>
        
        
        <h2>Prêt à Commencer?</h2>
        <p>Envie de transformer chaque panier à trois points en victoire pour votre portefeuille? Rejoignez Crazy Parieur dès maintenant pour profiter des meilleurs conseils, cotes et promotions sur les paris basketball. Pariez intelligent avec notre plateforme sécurisée et facile d\'utilisation. Plus d\'hésitation, lancez-vous dans l\'aventure des paris sportifs!</p>
    
        ';
    renderTextContainer('', $basketballContent);
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
    renderTextContainer('', $privacyContent);
}

// Responsible Gaming content
function renderResponsibleGamingContent() {
    $responsibleContent = '
        <h2>Notre Engagement pour le Jeu Responsable</h2>
        <p>Chez Crazy Parieur, nous nous engageons à offrir une expérience de jeu sécurisée et responsable à tous nos utilisateurs. Nous collaborons étroitement avec l\'Autorité Nationale des Jeux (ANJ) pour promouvoir des pratiques de pari saines et prévenir les risques de jeu pathologique. Il est essentiel pour nous que nos services restent une source de plaisir et non de problèmes.</p>
        
        <h2>Prévention et Sécurité</h2>
        <p>Nous appliquons une politique stricte d\'interdiction aux mineurs de moins de 18 ans, conformément à la législation en vigueur. Notre plateforme intègre différents mécanismes de contrôle pour minimiser les risques d\'un jeu nuisant à votre environnement ou jeu sécurisé.</p>
        
        <h2>Signes de Jeu Problématique</h2>
        <p>Reconnaître les signaux d\'alarme du jeu problématique est crucial pour agir de manière préventive. Voici quelques signes qui peuvent indiquer un problème :</p>
        
        <h3>Changements de Comportement</h3>
        <p>Augmentation du temps et de l\'argent consacré aux jeux, négligence des responsabilités personnelles, professionnelles ou familiales.</p>
        
        <h3>Signes Émotionnels</h3>
        <p>Changements d\'humeur soudains, irritabilité croissante ou anxiété liée aux activités de jeu.</p>
        
        <h3>Difficultés Financières</h3>
        <p>Problèmes financiers soudains, comme des dettes qui s\'accumulent ou des emprunts fréquents pour continuer à jouer.</p>
        
        <h2>Outils de Prévention</h2>
        <p>Crazy Parieur met à disposition plusieurs outils pour aider nos utilisateurs à garder le contrôle sur leurs activités de jeu.</p>
        
        <h3>Limites de Dépôt</h3>
        <p>Les joueurs peuvent fixer des limites de dépôt quotidiennes, hebdomadaires ou mensuelles pour gérer leurs dépenses de manière proactive.</p>
        
        <h3>Auto-Évaluation</h3>
        <p>Nous proposons des tests d\'auto-évaluation pour aider les joueurs à mieux comprendre leur comportement de jeu et détecter d\'éventuels signes problématiques dès le début.</p>
        
        <h2>Ressources d\'Aide</h2>
        <p>En cas de besoin, plusieurs ressources sont disponibles pour obtenir de l\'aide :</p>
        
        <h3>Ligne d\'Assistance ANJ</h3>
        <p>Les joueurs peuvent contacter le numéro de l\'ANJ au 09 74 75 13 13 pour échanger avec un conseiller formé à la prévention du jeu pathologique.</p>
        
        <h3>Sites de Soutien</h3>
        <p>Des sites comme addict-aide.fr et sos-joueurs.org proposent informations, conseils et accompagnement aux joueurs concernés par des comportements de jeu problématiques.</p>
        
        <h3>Auto-Exclusion</h3>
        <p>Pour ceux qui souhaitent une perte de contrôle, notre fonction d\'auto-exclusion permet aux joueurs de se retirer temporairement ou définitivement de notre plateforme. Cette démarche peut être réalisée simplement depuis leur compte utilisateur.</p>
        
        <h2>Organismes de Référence</h2>
        <p>En plus de l\'ANJ, Crazy Parieur travaille en collaboration avec plusieurs organismes reconnus pour promouvoir le jeu responsable.</p>
        
        <h3>Réglementation et Partenariats</h3>
        <p>Nous coopérons étroitement avec les organismes de régulation et les groupes de soutien pour nous assurer que nos pratiques sont constamment actualisées et conformes aux meilleures normes de prévention du jeu pathologique.</p>
        
        <h3>Formation Continue</h3>
        <p>Notre équipe reçoit régulièrement des formations sur les principes du jeu responsable et les techniques d\'identification des signes problématiques spécialisées pour intervenir de manière appropriée si besoin.</p>
        
        <p>Chez Crazy Parieur, nous prenons très au sérieux notre responsabilité en matière de jeu responsable. Notre engagement vise à garantir que chaque utilisateur bénéficie dans le domaine du plaisir et de l\'excitation sans jamais devenir source de préjudice. N\'hésitez pas à contacter notre service client pour plus d\'informations ou d\'aide concernant le jeu responsable.</p>
    ';
    renderTextContainer('', $responsibleContent);
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
    renderTextContainer('', $anjContent);
}

// Terms of Use content - Content added from Figma
function renderTermsOfUseContent() {
    $termsContent = '
        <h2>Introduction</h2>
        <h3>Présentation du Site</h3>
        <p>Crazy Parieur est une plateforme d\'affiliation spécialisée dans les paris sportifs. Le Site fournit des informations et des liens vers des sites partenaires de paris sportifs, sans proposer directement de services de jeu ou de paris.</p>
        
        <h3>Services Proposés</h3>
        <p>Le Site propose les services suivants :</p>
        <ul>
            <li>Redirection vers des sites de paris sportifs partenaires</li>
            <li>Publication d\'analyses, de statistiques et de conseils relatifs aux paris sportifs</li>
            <li>Présentation des offres promotionnelles et bonus proposés par nos partenaires</li>
        </ul>

        <h2>Responsabilités</h2>
        <h3>Responsabilité de l\'Utilisateur</h3>
        <p>L\'utilisateur s\'engage à ne pas utiliser le Site pour des activités illégales et à respecter les lois et règlements en vigueur. L\'utilisateur reconnaît qu\'il doit vérifier que la législation de son pays l\'autorise à utiliser les services des sites partenaires avant toute inscription.</p>
        
        <h3>Responsabilité du Site</h3>
        <p>Crazy Parieur agit en tant qu\'intermédiaire et ne peut être tenu responsable des actions, erreurs ou politiques de ses sites partenaires. Le Site décline toute responsabilité concernant les pertes financières ou dommages indirects résultant de l\'utilisation des services proposés par les sites partenaires.</p>

        <h2>Limitations</h2>
        <p>Les informations communiquées sur le Site sont fournies à titre informatif. Bien que nous nous efforcions de les maintenir exactes et à jour, des inexactitudes ou des omissions peuvent survenir.</p>

        <h2>Propriété Intellectuelle</h2>
        <p>Les contenus du Site, incluant textes, graphiques, logos, images, ainsi que leur sélection et agencement, sont la propriété exclusive de Crazy Parieur, sauf mention contraire. Toute reproduction non autorisée de ces contenus, totale ou partielle, peut donner lieu à des poursuites civiles et/ou pénales.</p>

        <h2>Protection des Données et Vie Privée</h2>
        <p>Crazy Parieur respecte la vie privée de ses utilisateurs et s\'engage à protéger les données personnelles. Conformément au Règlement Général sur la Protection des Données (RGPD), le Site ne collecte aucune donnée personnelle, ne pratique aucun profiling et n\'utilise aucun cookie de suivi personnel.</p>

        <h2>Droit Applicable et Juridiction</h2>
        <p>Les présentes CGU sont régies par le droit français. Tout litige relatif à leur interprétation ou exécution relèvera des tribunaux compétents en France.</p>

        <h2>Modifications des CGU</h2>
        <p>Nous nous réservons le droit de modifier ces CGU à tout moment. Les modifications prennent effet dès leur publication sur le Site. Il appartient à l\'utilisateur de consulter régulièrement les CGU pour se tenir informé des éventuelles modifications.</p>

        <h2>Contact</h2>
        <p>Pour toute question ou réclamation concernant les CGU ou les services du Site, contactez-nous à : contact@crazy-parieur.fr</p>

        <h2>Dispositions Finales</h2>
        <p>Merci de visiter Crazy Parieur. Nous espérons que notre site répondra à vos attentes en matière d\'informations sur les paris sportifs et vous accompagnera dans vos démarches.</p>
        <p>Le présent texte constitue l\'intégralité des Conditions Générales d\'Utilisation du site Crazy Parieur et remplace tout accord antérieur relatif à ces conditions.</p>
    ';
    renderTextContainer('', $termsContent);
}
?>