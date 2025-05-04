<footer class="footer">
    <div class="footer-container">
        <div class="footer-section">
            <h3 data-i18n="footer.pages.h3">Oldalak</h3>
            <ul class="pages-links">
                <li><a href="./" data-i18n="footer.pages.home">Kezdőlap</a></li>
                <li><a href="./#tanfolyamok" data-i18n="footer.pages.training">Tanfolyamok</a></li>
                <li><a href="<?= BASE_URL . $routes['berbeadas']['path'] ?>" data-i18n="footer.pages.rental">Bérbeadás</a></li>
                <li><a href="<?= BASE_URL . $routes['tanacsadas']['path'] ?>" data-i18n="footer.pages.counseling">Tanácsadás</a></li>
                <li><a href="./#rolunk" data-i18n="footer.pages.aboutus">Rólunk</a></li>
                <li><a href="./#kapcsolat" data-i18n="footer.pages.contact">Kapcsolat</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h3 data-i18n="footer.contact.h3">Kapcsolat</h3>
            <p><b>Email </b></p>

                <p>rdr2003@rdr2003.hu</p>

            <p><b data-i18n="footer.contact.phone">Telefon </b></p>
                <p>+36 30 258 7749</p>
            <h3 data-i18n="footer.contact.follow_us">Kövess minket</h3>
            <ul class="social-links">
                <li><a href="https://www.facebook.com/rdr2003.hu" target="_blank"><i class="fab fa-facebook"></i></a></li>   
            </ul>
        </div>
        <div class="footer-section">
            <h3 data-i18n="footer.documents.h3">Dokumentumok</h3>
            <ul class="docs">
                <li><a href="<?= BASE_URL . $routes['privacy-policy']['path'] ?>" data-i18n="footer.documents.privacy-policy">Adatkezelési tájékoztató</a></li>
                <li><a href="<?= BASE_URL . $routes['cookie']['path'] ?>" data-i18n="footer.documents.cookie">Cookie tájékoztató</a></li>
                <li><a href="<?= BASE_URL . $routes['impressum']['path'] ?>" data-i18n="footer.documents.impressum">Impresszum</a></li>
            </ul>
            <h3 data-i18n="footer.data.h3">Adatok</h3>
            <ul>
                <li>ÁKÓ: 1%</li>
                <li>VSM: 1%</li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2003-<?php echo date('Y');?> RDR2003. <span data-i18n="footer.rights"></span></p>
    </div>
</footer>
<link rel="stylesheet" href="css/footer.css">