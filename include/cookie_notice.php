<?php
require_once 'cookie_handler.php';

// Ha még nincs elfogadva a cookie, akkor megjelenítjük az értesítőt
if (!getCookieValue('cookie_accepted')) {
?>
<div id="cookie-notice" class="cookie-notice">
    <div class="cookie-notice-content">
        <p>Ez a weboldal cookie-kat (sütiket) használ a felhasználói élmény javítása érdekében. A weboldal használatával Ön elfogadja a cookie-k használatát. További információt a <a href="<?= BASE_URL . $routes['cookie']['path'] ?>" class="cookie-policy-link">Cookie Tájékoztatóban</a> talál.</p>
        <button onclick="acceptCookies()" class="cookie-accept-btn">Elfogadom</button>
    </div>
</div>

<style>
.cookie-notice {
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: rgba(0, 0, 0, 0.9);
    color: white;
    padding: 15px;
    z-index: 9999;
    display: flex;
    justify-content: center;
    align-items: center;
}

.cookie-notice-content {
    max-width: 1200px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 20px;
}

.cookie-notice p {
    margin: 0;
    font-size: 14px;
}

.cookie-policy-link {
    color: var(--main);
    text-decoration: none;
}

.cookie-policy-link:hover {
    color: var(--main);
    text-decoration: underline;
}

.cookie-accept-btn {
    background-color: var(--main);
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
    transition: background-color 0.3s;
    white-space: nowrap;
}

.cookie-accept-btn:hover {
    background-color: var(--main-hover);
}
</style>

<script>
function acceptCookies() {
    // AJAX kérés a cookie beállításához
    fetch('include/set_cookie_accepted.php', {
        method: 'POST'
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            document.getElementById('cookie-notice').style.display = 'none';
        }
    });
}
</script>
<?php
}
?>
