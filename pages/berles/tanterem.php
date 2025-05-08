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
                <img src="imgs/pexels-pixabay-159213.jpg" alt="" class="img-fluid">
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
                        <i class="fas fa-couch"></i>
                        <span>Korszerű bútorzat</span>
                    </div>
                    <div class="service-card">
                        <i class="fas fa-fan"></i>
                        <span>Klimatizált</span>
                    </div>
                    <div class="service-card">
                        <i class="fas fa-table"></i>
                        <span>Mágneses fehértábla</span>
                    </div>
                    <div class="service-card">
                        <i class="fas fa-tv"></i>
                        <span>Vetítő</span>
                    </div>
                    <div class="service-card">
                        <i class="fas fa-person-chalkboard"></i>
                        <span>Vetítővászonnal felszerelt</span>
                    </div>
                    <div class="service-card">
                        <i class="fas fa-utensils"></i>
                        <span>Catering (étel/ital) bekészítés</span>
                    </div>
                    <div class="service-card">
                        <i class="fas fa-train-tram"></i>
                        <span>Tömegközlekedéssel is könnyen elérhető</span>
                    </div>
                    <div class="service-card">
                        <i class="fas fa-wifi"></i>
                        <span>Ingyenes WI-FI</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 decription">
                <h4>Bérelhető tantermek különböző méretekben</h4>
                <p>Lehetőséget kínálunk két jól felszerelt tanterem bérlésére, amelyek ideálisak különféle képzések, tréningek, workshopok vagy kisebb rendezvények lebonyolítására. Az egyik terem kb. 20 fő befogadására alkalmas, míg a nagyobbik terem kényelmesen elfér 40-50 fő részére is, így kisebb és közepes létszámú eseményekhez egyaránt megfelelő választás lehet.</p>

                <h4>Modern felszereltség és kényelmes környezet</h4>
                <p>Mindkét terem korszerű bútorzattal van berendezve, klimatizált, és modern technikai eszközökkel felszerelt. A felszereltség része a mágneses fehértábla, a vetítő és a hozzá tartozó vetítővászon, amelyek biztosítják a professzionális és gördülékeny prezentációk lebonyolítását. A termek kényelmes, ergonomikus berendezése és kellemes belső kialakítása hozzájárul a hatékony tanulási, illetve munkakörnyezethez.</p>

                <h4>Igény szerint catering szolgáltatás</h4>
                <p>Igény esetén catering szolgáltatást is biztosítunk, legyen szó egyszerű italbekészítésről (kávé, tea, ásványvíz) vagy akár komplett étkezésről. Ezzel segítjük a rendezvények zavartalan és komfortos lebonyolítását.</p>

                <h4>Könnyű megközelíthetőség</h4>
                <p>A helyszín tömegközlekedéssel is könnyen megközelíthető: Kelenföld vasútállomástól mindössze 10 percre található vonattal vagy helyközi buszjárattal. Ez különösen előnyös azok számára, akik vidékről érkeznek, de a budapesti résztvevők számára is kényelmesen elérhető.</p>

                <h4>Ideális választás oktatási célú rendezvényekhez</h4>
                <p>Amennyiben egy modern, jól felszerelt és könnyen megközelíthető helyszínt keres tanfolyamok, céges tréningek vagy más oktatási célú rendezvények lebonyolításához, nálunk megtalálja a megfelelő megoldást.</p>
            </div>
        </div>
    </div>

    <?php include "include/footer.php" ?>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>