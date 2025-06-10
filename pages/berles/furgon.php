<!DOCTYPE html>
<html lang="hu">

<head>
    <?php include "include/head.php"; ?>
    <title>Furgon Bérlés</title>
    <link rel="stylesheet" href="css/berles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=mode_fan" />
</head>

<body>
    <?php include "include/navigationbar.php"; ?>
    <div class="container rent">
        <div class="row">
            <div class="col-lg-7 col-sm-12">
                <img src="imgs/pexels-moonlightshotz-11139345.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-lg-5 col-sm-12 contact">
                <h3>Lépjen velünk kapcsolatba</h3>
                <div class="contact-item">
                    <span><i class="fas fa-phone fa-xl"></i> +36 30 878 9488</span>
                </div>
                <div class="contact-item">
                    <span><i class="fas fa-envelope"></i> rdr2003@rdr2003.hu</span>
                </div>
                <div class="contact-item">
                    <span><i class="fas fa-location-arrow"></i> Törökbálint, Tópark u. 1a, 2045</span>
                </div>
                <?php include "include/basic-application-form.php"; ?>

            </div>
            <div class="col-lg-12 services">
                <div class="services-grid">
                    <div class="service-card">
                        <i class="fas fa-van-shuttle"></i>
                        <span>Személyszállításra kialakítva</span>
                    </div>
                    <div class="service-card">
                        <i class="fas fa-users"></i>
                        <span>6–9 fő számára kényelmes</span>
                    </div>
                    <div class="service-card">
                        <i class="fas fa-snowflake"></i>
                        <span>Klimatizált utastér</span>
                    </div>
                    <div class="service-card">
                        <i class="fas fa-suitcase-rolling"></i>
                        <span>Nagy csomagtér</span>
                    </div>
                    <div class="service-card">
                        <i class="fas fa-car-side"></i>
                        <span>Rövid és hosszú utakra is alkalmas</span>
                    </div>
                    <div class="service-card">
                        <i class="fas fa-id-card"></i>
                        <span>B-s jogosítvánnyal vezethető</span>
                    </div>
                    <div class="service-card">
                        <i class="fas fa-user-tie"></i>
                        <span>Sofőrrel is kérhető</span>
                    </div>
                    <div class="service-card">
                        <i class="fas fa-road"></i>
                        <span>Ideális céges utakhoz, kirándulásokhoz</span>
                    </div>

                </div>
            </div>
            <div class="col-lg-12 decription">
                <h4>Kényelmes személyszállító furgon bérlése</h4>
                <p>Lehetőséget kínálunk kényelmes, személyszállításra alkalmas furgon bérlésére, amely ideális kisebb csoportok, csapatok, családok vagy munkatársak szállítására. A jármű nem teherszállításra szolgál, hanem utasok kényelmes és biztonságos szállítására lett kialakítva.</p>

                <h4>6–9 fő számára tervezve</h4>
                <p>A furgon 6–9 fő szállítására alkalmas, klimatizált, tágas utastérrel, kényelmes ülésekkel és bőséges csomagtérrel rendelkezik. A jármű karbantartott, megbízható műszaki állapotban van, és alkalmas rövidebb vagy hosszabb utak megtételére is.</p>

                <h4>Ideális céges utakhoz, kirándulásokhoz</h4>
                <p>Kiváló választás céges rendezvényekre való eljutáshoz, csapatépítőkre, iskolai kirándulásokhoz, sporteseményekre vagy akár külföldi utazásokhoz. A furgon lehetőséget ad arra, hogy egy közös járműben, szervezetten és költséghatékonyan utazzanak az utasok.</p>

                <h4>Rugalmas bérlési lehetőségek</h4>
                <p>Bérléskor rugalmas feltételeket kínálunk, akár sofőrrel, akár sofőr nélkül szeretné igénybe venni a járművet. A furgon vezetéséhez elegendő a B kategóriás jogosítvány.</p>

                <h4>Vegye fel velünk a kapcsolatot!</h4>
                <p>Ha megbízható, kényelmes és jól felszerelt személyszállító járművet keres, vegye fel velünk a kapcsolatot, és mi segítünk megtalálni az Ön számára legjobb megoldást.</p>
            </div>
        </div>
    </div>

    <?php include "include/footer.php" ?>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>