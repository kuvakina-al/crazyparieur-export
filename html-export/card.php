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
    echo '<span class="card-amount">' . $amount . '</span>';
    echo '</div>';
    echo '<div class="card-subtitle">' . $subtitle . '</div>';
    echo '</div>';
    
    echo '<a href="' . $buttonLink . '" class="card-button">' . $buttonText . '</a>';
    
    if (!empty($features)) {
        echo '<ul class="card-features">';
        foreach ($features as $feature) {
            echo '<li><span class="feature-check"></span>' . $feature . '</li>';
        }
        echo '</ul>';
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