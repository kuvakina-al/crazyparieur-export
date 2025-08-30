<?php
function renderCard($logo, $logoAlt, $percentage, $amount, $subtitle, $buttonText, $buttonLink, $features, $variant = '') {
    $cardClass = 'card' . ($variant ? ' card-' . $variant : '');
    
    echo '<div class="' . $cardClass . '">';
    
    echo '<div class="card-logo">';
    echo '<img src="./images/' . $logo . '" alt="' . $logoAlt . '" />';
    echo '</div>';
    
    echo '<div class="card-offer">';
    echo '<div class="card-main-text">';
    echo '<span class="card-percentage">' . $percentage . '</span>';
    echo '<span class="card-text-white"> </span>';
    if (strpos($amount, 'JUSQU\'À') !== false) {
        $amountParts = explode(' ', $amount, 2);
        echo '<span class="card-jusqua">' . $amountParts[0] . ' </span>';
        echo '<span class="card-amount">' . (isset($amountParts[1]) ? $amountParts[1] : '') . '</span>';
    } else {
        echo '<span class="card-amount">' . $amount . '</span>';
    }
    echo '</div>';
    echo '<div class="card-subtitle">' . $subtitle . '</div>';
    echo '</div>';
    
    echo '<a href="' . $buttonLink . '" class="card-button">' . $buttonText . '</a>';
    
    if (!empty($features)) {
        echo '<ul class="card-features">';
        foreach ($features as $feature) {
            echo '<li>' . $feature . '<span class="feature-check"></span></li>';
        }
        echo '</ul>';
    }
    
    echo '</div>';
}

function renderCardsContainer($cards = []) {
    echo '<div class="cards-container">';
    
    // Default cards if none provided
    if (empty($cards)) {
        $cards = [
            [
                'logo' => 'Parions Sport.png',
                'logoAlt' => 'ParionsSport',
                'percentage' => '100%',
                'amount' => 'JUSQU\'À 100€',
                'subtitle' => '+1ER PARI REMBOURSÉ',
                'buttonText' => 'OBTENEZ LE BONUS',
                'buttonLink' => 'https://www.enligne.parionssport.fdj.fr/?utm=Q7dK2a9tX3',
                'features' => ['Retrait rapide', 'Bonus Exclusif', 'Aucune mise'],
                'variant' => 'pattern'
            ],
            [
                'logo' => 'Winamax.png',
                'logoAlt' => 'Winamax',
                'percentage' => '200%',
                'amount' => 'JUSQU\'À 200€',
                'subtitle' => '+1ER PARI REMBOURSÉ',
                'buttonText' => 'OBTENEZ LE BONUS',
                'buttonLink' => 'https://www.winamax.fr/?utm=z5C1Y8H4mV',
                'features' => ['Retrait rapide', 'Bonus Exclusif', 'Aucune mise'],
                'variant' => 'pattern'
            ],
            [
                'logo' => 'NetBet.png',
                'logoAlt' => 'NetBet',
                'percentage' => '150%',
                'amount' => 'JUSQU\'À 150€',
                'subtitle' => '+1ER PARI REMBOURSÉ',
                'buttonText' => 'OBTENEZ LE BONUS',
                'buttonLink' => 'https://www.netbet.fr/?utm=Px3u0N6T7A',
                'features' => ['Retrait rapide', 'Bonus Exclusif', 'Aucune mise'],
                'variant' => 'pattern'
            ]
        ];
    }
    
    foreach ($cards as $card) {
        renderCard(
            $card['logo'],
            $card['logoAlt'],
            $card['percentage'],
            $card['amount'],
            $card['subtitle'],
            $card['buttonText'],
            $card['buttonLink'],
            $card['features'],
            $card['variant'] ?? ''
        );
    }
    
    echo '</div>';
}

function renderTitleSection() {
    echo '<div class="title-section">';
    echo '<h1 class="main-title">Paris Sportifs Faciles et Rapides</h1>';
    echo '<p class="main-subtitle">Crazy Parieur vous propose un accompagnement complet: astuces, stratégies et comparatifs pour réussir</p>';
    echo '<div class="title-features">';
    echo '<div class="title-feature">';
    echo '<span class="feature-check">✓</span>';
    echo '<span>Découvrez la plus grande sélection des meilleures offres de bonus</span>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}

function renderClaimButtons() {
    echo '<div class="claim-button-container">';
    echo '<a href="#" class="claim-button">OBTENEZ LE BONUS</a>';
    echo '<a href="#" class="claim-button claim-button-secondary">OBTENEZ LE BONUS</a>';
    echo '<a href="#" class="claim-button claim-button-dark">OBTENEZ LE BONUS</a>';
    echo '</div>';
}
?>