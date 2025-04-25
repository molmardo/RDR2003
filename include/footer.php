<footer class="footer">
    <div class="footer-container">
        <div class="footer-section">
            <h3>Rólunk</h3>
            <p>Mi egy fantasztikus cég vagyunk, amely nagyszerű szolgáltatásokat kínál.</p>
        </div>
        <div class="footer-section">
            <h3>Oldalak</h3>
            <ul class="pages-links">
                <li><a href="./">Kezdőlap</a></li>
                <li><a href="<?= BASE_URL . $routes['tanfolyamok']['path'] ?>">Tanfolyamok</a></li>
                <li><a href="<?= BASE_URL . $routes['berbeadas']['path'] ?>">Bérbeadás</a></li>
                <li><a href="./">Rólunk</a></li>
                <li><a href="./">Kapcsolat</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>Kapcsolat</h3>
            <p>Email: rdr2003@rdr2003.hu</p>
            <p>Telefon: +36 30 878 9488</p>
            <h3>Kövess minket</h3>
            <ul class="social-links">
                <li><a href="https://www.facebook.com/rdr2003.hu" target="_blank">Facebook</a></li>   
            </ul>
        </div>
        <div class="footer-section">
            <h3>Dokumentumok</h3>
            <ul class="docs">
                <li><a href="">Adatkezelési tájékoztató</a></li>
                <li><a href="">Cookie tájékoztató</a></li>
                <li><a href="">Impresszum</a></li>
            </ul>
            <h3>Adatok</h3>
            <ul>
                <li>ÁKÓ: 1</li>
                <li>VSM: 1</li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2003-<?php echo date('Y');?> RDR2003. Minden jog fenntartva.</p>
    </div>
</footer>
<link rel="stylesheet" href="css/footer.css">