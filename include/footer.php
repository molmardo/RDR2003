<link rel="stylesheet" href="css/footer.css">
<footer class="footer">
    <div class="footer-container">
        <div class="footer-section">
            <h3><?= $lang['footer']['quick-links']['h3'] ?></h3>
            <ul class="pages-links">
                <li><a href="<?= navLink() ?>"><?= $lang['footer']['quick-links']['home'] ?></a></li>
                <li><a href="<?= navLink() ?>#courese"><?= $lang['footer']['quick-links']['courses'] ?></a></li>
                <li><a href="<?= navLink('advice') ?>"><?= $lang['footer']['quick-links']['advice'] ?></a></li>
                <li><a href="<?= navLink('rent') ?>"><?= $lang['footer']['quick-links']['rent'] ?></a></li>
                <li><a href="<?= navLink() ?>#about-us"><?= $lang['footer']['quick-links']['about-us'] ?></a></li>
                <li><a href="<?= navLink() ?>#contact"><?= $lang['footer']['quick-links']['contact'] ?></a></li>
            </ul>
            <h3><?= $lang['footer']['follow_us'] ?></h3>
            <ul class="social-links">
                <li><a href="https://www.facebook.com/rdr2003.hu" target="_blank"><i class="fab fa-facebook"></i></a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h3><?= $lang['footer']['contact']['h3'] ?></h3>
            <p><b>Email </b></p>

            <p><?= $lang['default']['email'] ?></p>

            <p><b><?= $lang['footer']['contact']['phone'] ?> </b></p>
            <?php foreach ($phone_numbers as $phone_number): ?>
                <p><?php echo htmlspecialchars($phone_number); ?></p>
            <?php endforeach; ?>

        </div>
        <div class="footer-section">
            <h3><?= $lang['footer']['documents']['h3'] ?></h3>
            <ul class="docs">
                <li><a href="<?= navLink('documents/privacy-policy') ?>"><?= $lang['footer']['documents']['privacy-policy'] ?></a></li>
                <li><a href="<?= navLink('documents/gdpr') ?>"><?= $lang['footer']['documents']['gdpr'] ?></a></li>
                <li><a href="<?= navLink('documents/cookie-policy') ?>"><?= $lang['footer']['documents']['cookie-policy'] ?></a></li>
                <li><a href="<?= navLink('documents/impressum') ?>"><?= $lang['footer']['documents']['impressum'] ?></a></li>
            </ul>
            <h3><?= $lang['footer']['data']['h3'] ?></a></h3>
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
                <li><?= $lang['footer']['data']['tax-number'] ?>: <?php echo $footer_data['ADOSZAM'] ?? '-'; ?></li>
                <li><?= $lang['footer']['data']['company-registration-number'] ?>: <?php echo $footer_data['NYILVANTARTASI_SZAM'] ?? '-'; ?></li>
                <li><?= $lang['footer']['data']['registration-number'] ?>: <?php echo $footer_data['CEGJEGYZEKSZAM'] ?? '-'; ?></li>
                <li><?= $lang['footer']['data']['gdpr-contact-person'] ?>: adatvedelem@rdr2003.hu</li>
            </ul>
        </div>

    </div>
    <div class="footer-bottom">
        <p>&copy; 2003-<?php echo date('Y'); ?> RDR2003. <span data-i18n="footer.rights"></span></p>
    </div>
</footer>