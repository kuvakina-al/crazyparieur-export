<?php
function renderCard($logo, $logoAlt, $percentage, $amount, $subtitle, $buttonText, $buttonLink, $features, $variant = '') {
    $cardClass = 'card' . ($variant ? ' card-' . $variant : '');
    
    echo '<div class="' . $cardClass . '">';
    echo '<div class="card-logo">';
    echo '<img src="./images/' . $logo . '" alt="' . $logoAlt . '" />';
    echo '</div>';
    
    echo '<div class="card-offer">';
    echo '<div class="card-percentage">' . $percentage . '</div>';
    echo '<div class="card-amount">' . $amount . '</div>';
    echo '<div class="card-subtitle">' . $subtitle . '</div>';
    echo '</div>';
    
    echo '<a href="' . $buttonLink . '" class="card-button">' . $buttonText . '</a>';
    
    if (!empty($features)) {
        echo '<ul class="card-features">';
        foreach ($features as $feature) {
            echo '<li>' . $feature . ' <span class="feature-check">✓</span></li>';
        }
        echo '</ul>';
    }
    
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