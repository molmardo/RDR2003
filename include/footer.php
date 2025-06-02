<link rel="stylesheet" href="css/footer.css">
<footer class="footer">
    <div class="footer-container">
        <div class="footer-section">
            <h3 data-i18n="footer.pages.title">Gyors linkek</h3>
            <ul class="pages-links">
                <li><a href="./" data-i18n="footer.pages.home">Kezdőlap</a></li>
                <li><a href="./#tanfolyamok" data-i18n="footer.pages.training">Tanfolyamok</a></li>
                <li><a href="<?= BASE_URL . $routes['berbeadas']['path'] ?>" data-i18n="footer.pages.rental">Bérbeadás</a></li>
                <li><a href="<?= BASE_URL . $routes['tanacsadas']['path'] ?>" data-i18n="footer.pages.counseling">Tanácsadás</a></li>
                <li><a href="./#rolunk" data-i18n="footer.pages.aboutus">Rólunk</a></li>
                <li><a href="./#kapcsolat" data-i18n="footer.pages.contact">Kapcsolat</a></li>
            </ul>
            <h3 data-i18n="footer.contact.follow_us">Kövess minket</h3>
            <ul class="social-links">
                <li><a href="https://www.facebook.com/rdr2003.hu" target="_blank"><i class="fab fa-facebook"></i></a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h3 data-i18n="footer.contact.h3">Kapcsolat</h3>
            <p><b>Email </b></p>

            <p>rdr2003@rdr2003.hu</p>

            <p><b data-i18n="footer.contact.phone">Telefon </b></p>
            <?php foreach ($phone_numbers as $phone_number): ?>
                <p><?php echo htmlspecialchars($phone_number); ?></p>
            <?php endforeach; ?>

        </div>
        <div class="footer-section">
            <h3 data-i18n="footer.documents.h3">Dokumentumok</h3>
            <ul class="docs">
                <li><a href="<?= BASE_URL . $routes['privacy-policy']['path'] ?>" data-i18n="footer.documents.privacy-policy">Adatkezelési tájékoztató</a></li>
                <li><a href="<?= BASE_URL . $routes['gdpr']['path'] ?>" data-i18n="footer.documents.gdpr">GDPR</a></li>
                <li><a href="<?= BASE_URL . $routes['cookie']['path'] ?>" data-i18n="footer.documents.cookie">Cookie tájékoztató</a></li>
                <li><a href="<?= BASE_URL . $routes['impressum']['path'] ?>" data-i18n="footer.documents.impressum">Impresszum</a></li>
            </ul>
            <h3 data-i18n="footer.data.h3">Adatok</h3>
            <?php
            $lines = file("data/footer.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            $footer_data = [];
            for ($i = 0; $i < count($lines) - 1; $i += 2) {
                $key = trim($lines[$i]);           // pl. adat1
                $value = trim($lines[$i + 1]);       // pl. Ez az adat
                $footer_data[$key] = $value;
            }
            ?>
            <ul class="data">
                <li><span data-i18n="footer.data.h3">ÁKÓ:</span> <?php echo $footer_data['AKO'] ?? '-'; ?></li>
                <li>VSM: <?php echo $footer_data['VSM'] ?? '-'; ?></li>
                <li>Adószám: <?php echo $footer_data['ADOSZAM'] ?? '-'; ?></li>
                <li>Cégjegyzékszám: <?php echo $footer_data['NYILVANTARTASI_SZAM'] ?? '-'; ?></li>
                <li>Nyilvántartási szám: <?php echo $footer_data['CEGJEGYZEKSZAM'] ?? '-'; ?></li>
                <li>GDPR kapcsolattartó: adatvedelem@rdr2003.hu</li>
            </ul>
        </div>

    </div>
    <div class="footer-bottom">
        <p>&copy; 2003-<?php echo date('Y'); ?> RDR2003. <span data-i18n="footer.rights"></span></p>
    </div>
</footer>