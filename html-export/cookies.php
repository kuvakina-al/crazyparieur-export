<div class="cookies-banner active" id="cookiesBanner">
    <div class="cookies-icon">🍪</div>
    <div class="cookies-content">
        <p class="cookies-text">
            Crazy Parieur utilise des cookies pour améliorer votre expérience et analyser le trafic. En continuant, vous acceptez leur utilisation.
        </p>
    </div>
    <div class="cookies-actions">
        <button class="cookies-btn cookies-btn-accept" onclick="acceptCookies()">Accepter</button>
        <button class="cookies-btn cookies-btn-decline" onclick="declineCookies()">Refuser</button>
    </div>
</div>

<script>
function acceptCookies() {
    document.getElementById('cookiesBanner').style.display = 'none';
    localStorage.setItem('cookies-accepted', 'true');
}

function declineCookies() {
    document.getElementById('cookiesBanner').style.display = 'none';
    localStorage.setItem('cookies-accepted', 'false');
}

// Check if cookies preference is already set
if (localStorage.getItem('cookies-accepted')) {
    document.getElementById('cookiesBanner').style.display = 'none';
}
</script>