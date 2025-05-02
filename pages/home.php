<!DOCTYPE html>
<html lang="hu">

<head>
    <?php include "include/head.php"; ?>
    <title>RDR2003</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include "include/navigationbar.php"; ?>
    <header>
        <div class="container">
            <h1 data-i18n="header.mainTitle">Ismerje meg tanfolyamainkat!</h1>
            <p class="subtitle" data-i18n="header.subtitle">"A biztonságos közlekedés az alapos képzésnél kezdődik."</p>
            <div class="cta-buttons">
                <a href="#tanfolyamok" class="btn primary-btn" data-i18n="header.courseButton">Tanfolyamaink</a>
            </div>
        </div>
    </header>
    <!-- Training -->
    <section class="container mx-auto training" id="tanfolyamok">
        <h2 class="text-center">Tanfolyamaink</h2>
        <div class="row g-4 mt-3">
            <div class="col-md-4 ScrollDownLeft">
                <div class="card">
                    <img src="imgs/pexels-500photos-com-15338-93398.jpg" alt="">
                    <div class="card-body d-flex flex-column">
                        <a href="<?= BASE_URL . $routes['osztakAdrTanfolyam']['path'] ?>">
                            <h3 class="card-title">Osztrák ADR tanfolyam <i class="fa fa-angle-right"></i></h3>
                        </a>
                        <p class="card-tex">Ausztriában végzett, hivatalos veszélyesáru-szállítási képzések magyar nyelven.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ScrollDownDown">
                <div class="card">
                    <img src="imgs/pexels-markusspiske-172074.jpg" alt="">
                    <div class="card-body d-flex flex-column">
                        <a href="<?= BASE_URL . $routes['magyarorszagiTanfolyamok']['path'] ?>">
                            <h3 class="card-title">Magyarországi tanfolyamok <i class="fa fa-angle-right"></i></h3>
                        </a>
                        <p class="card-tex">Magyarországon elérhető felnőttképzések a közlekedési, fuvarozási szektor számára.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ScrollDownRight">
                <div class="card">
                    <img src="imgs/pexels-quintingellar-2199293.jpg" alt="">
                    <div class="card-body d-flex flex-column">
                        <a href="<?= BASE_URL . $routes['magyarAdrTanfolyam']['path'] ?>">
                            <h3 class="card-title">Magyarországi ADR tanfolyam <i class="fa fa-angle-right"></i></h3>
                        </a>
                        <p class="card-tex">Az ADR 1.3. fejezete szerinti „kisadr” képzés</p>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- About US -->
    <section class="about_us" id="rolunk">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 ScrollDownLeft">
                    <h2 class="mb-4">Rólunk</h2>
                    <p>
                        Több mint két évtizedes tapasztalatunkkal nem csupán szolgáltatást, hanem valódi, értékalapú partnerséget kínálunk. Minden ügyfelünkkel egyedi úton járunk: megértjük működésüket, céljaikat és a hozzájuk vezető legbiztonságosabb utat. Hiszünk abban, hogy az igazi szakmaiság nem sablonokban, hanem személyre szabott megoldásokban mutatkozik meg.
                    </p>
                    <p>
                        <q>Szakértelem, amely előnyt teremt.</q>
                    </p>
                    <a href="<?= BASE_URL . $routes['rolunk']['path'] ?>">Munkatársaink</a>
                </div>
                <div class="col-md-6 ScrollDownRight">
                    <img src="imgs/man-with-photo-camera-his-holidays.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Why choose -->
    <section class="container">
        <div class="why-choose">
            <div class="row align-items-center">
                <div class="col-md-6 ScrollDownLeft">
                    <img src="imgs/two-guys-talking-about-work-work-garage-near-truck-transfer-documents-with-goods.jpg" alt="">
                </div>
                <div class="col-md-6 ScrollDownRight">
                    <h2>Miért válassza a RDR2003-at?</h2>
                    <div>
                        <div>
                            <span>Tapasztalt oktatók</span>
                            <p>Szakértő oktatóink naprakész tudással rendelkeznek.</p>
                        </div>
                        <div>
                            <span>Szórakoztató tanulás</span>
                            <p>Modern, interaktív oktatási módszerek.</p>
                        </div>
                        <div>
                            <span>Rugalmas időpontok</span>
                            <p>Az Ön időbeosztásához igazodó tanfolyamok.</p>
                        </div>
                        <div>
                            <span>Több helyszín</span>
                            <p>Több helyszínen is ott vagyunk.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="logos ScrollDownTransparent">
            <h2>Partnereink</h2>
            <div class="logos-slide">
                <img src="partners/BTlogo_100.png" alt="ceglogo">
                <img src="partners/Calderys_Orange-Noir_1.png.png" alt="ceglogo">
                <img src="partners/ecorisk_logo.svg" alt="ceglogo">
                <img src="partners/GSSA-Logo-schief.svg" alt="ceglogo">
                <img src="partners/klacska_group-logo.png" alt="ceglogo">
                <img src="partners/logo-terravia.png" alt="ceglogo">
                <img src="partners/mavrec.png" alt="ceglogo">
                <img src="partners/tako_logo_feher_k.png" alt="ceglogo">
                <img src="partners/transintertop.png" alt="ceglogo">
                <img src="partners/unitranscoop.png" alt="ceglogo">
                <img src="partners/westbridge.png" alt="ceglogo">
            </div>

            <div class="logos-slide">
                <img src="partners/BTlogo_100.png" alt="ceglogo">
                <img src="partners/Calderys_Orange-Noir_1.png.png" alt="ceglogo">
                <img src="partners/ecorisk_logo.svg" alt="ceglogo">
                <img src="partners/GSSA-Logo-schief.svg" alt="ceglogo">
                <img src="partners/klacska_group-logo.png" alt="ceglogo">
                <img src="partners/logo-terravia.png" alt="ceglogo">
                <img src="partners/mavrec.png" alt="ceglogo">
                <img src="partners/tako_logo_feher_k.png" alt="ceglogo">
                <img src="partners/transintertop.png" alt="ceglogo">
                <img src="partners/unitranscoop.png" alt="ceglogo">
                <img src="partners/westbridge.png" alt="ceglogo">
            </div>
        </div>

    </section>
    <!-- contact -->
    <section class="container" id="kapcsolat">
        <div class="row align-items-center ScrollDownDown">
            <div class="col-md-6">
                <h2 class="mt-3 mb-3">Lépjen velünk kapcsolatba</h2>
                <form action="" method="post">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Gibsz Jakab" required>
                        <label for="floatingInput">Név</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                        <label for="floatingInput">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="" class="form-control" id="floatingInput" placeholder="+36123456789">
                        <label for="floatingInput">Telefonszám</label>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Írd meg az üzenetedet" id="floatingTextarea2" style="height: 100px" required></textarea>
                        <label for="floatingTextarea2">Üzenet</label>
                    </div>
                    <br>
                    <div class="g-recaptcha" data-sitekey="6LfeBiQrAAAAAHwaRdPJreFhlif2tcB829Wxm-pH"></div>

                    <button type="submit" class="send-btn">Küldés</button>
                </form>
            </div>
            <div class="col-md-6">
                <div class="contact-info">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2697.8863595940325!2d18.901858076867352!3d47.45315459856045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4741e0728216be49%3A0x2a972f42c44fc056!2zVMO2csO2a2LDoWxpbnQsIFTDs3BhcmsgdS4gMWEsIDIwNDU!5e0!3m2!1shu!2shu!4v1745434769485!5m2!1shu!2shu" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <div>
                        <h3>
                            Elérhetőségek
                        </h3>
                        <span><i class="fas fa-envelope"></i> <a href="mailto:rdr2003@rdr2003.hu">rdr2003@rdr2003.hu</a></span>
                        <span><br><i class="fas fa-mobile fa-xl"></i> +36 30 878 9488</span>
                        <span><br><i class="fas fa-mobile fa-xl"></i> +36 30 258 7749</span>
                        <span><br><i class="fas fa-mobile fa-xl"></i> +36 30 664 2530</span>
                        <h3>Helyszín</h3>
                        <span><i class="fas fa-location-arrow"></i> Törökbálint, Tópark u. 1a, 2045</span>
                        <?php
                        date_default_timezone_set('Europe/Budapest');
                        $nyitvatartas = [
                            'Monday'    => ['08:00', '16:00'],
                            'Tuesday'   => ['08:00', '16:00'],
                            'Wednesday' => ['08:00', '16:00'],
                            'Thursday'  => ['08:00', '16:00'],
                            'Friday'    => ['08:00', '15:00'],
                            'Saturday'  => null,
                            'Sunday'    => null,
                        ];

                        $nap = date('l');
                        $idoMost = new DateTime();

                        $valasz = "<span class='closeHours'>Zárva</span>";

                        if (isset($nyitvatartas[$nap]) && $nyitvatartas[$nap] !== null) {
                            [$nyit, $zar] = $nyitvatartas[$nap];
                            $nyitas = DateTime::createFromFormat('H:i', $nyit);
                            $zaras  = DateTime::createFromFormat('H:i', $zar);
                            $elotte30 = (clone $nyitas)->modify('-30 minutes');
                            $elotteZaras30 = (clone $zaras)->modify('-30 minutes');

                            if ($idoMost < $elotte30) {
                                $valasz = "<span class='closeHours'>Zárva</span>";
                            } elseif ($idoMost >= $elotte30 && $idoMost < $nyitas) {
                                $valasz = "<span class='openingSoon'>Hamarosan nyit";
                            } elseif ($idoMost >= $nyitas && $idoMost < $elotteZaras30) {
                                $valasz = "<span class='openHours'>Nyitva";
                            } elseif ($idoMost >= $elotteZaras30 && $idoMost < $zaras) {
                                $valasz = "<span class='closingSoon'>Hamarosan zár";
                            } else {
                                $valasz = "<span class='closeHours'>Zárva</span>";
                            }
                        }
                        ?>

                        <h3>Nyitvatartás: <span class="openingTime"><?php echo $valasz; ?></span></h3>
                        <table>
                            <tr>
                                <td>Hétfő</td>
                                <td>8:00-16:00</td>
                            </tr>
                            <tr>
                                <td>Kedd</td>
                                <td>8:00-16:00</td>
                            </tr>
                            <tr>
                                <td>Szerda</td>
                                <td>8:00-16:00</td>
                            </tr>
                            <tr>
                                <td>Csütörtök</td>
                                <td>8:00-16:00</td>
                            </tr>
                            <tr>
                                <td>Péntek</td>
                                <td>8:00-15:00</td>
                            </tr>
                            <tr>
                                <td>Szombat</td>
                                <td>Zárva</td>
                            </tr>
                            <tr>
                                <td>Vasárnap</td>
                                <td>Zárva</td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <?php include "include/footer.php"; ?>
</body>

</html>

<script>
    var copy = document.querySelector(".logos-slide").cloneNode(true);
    document.querySelector(".logos").appendChild(copy);
</script>
<script>
    const toggleButton = document.querySelector('.toggleButton');
    const additionalContent = document.querySelector('.additionalContent');

    toggleButton.addEventListener('click', function(event) {
        event.preventDefault();
        additionalContent.classList.toggle('show');
        toggleButton.classList.toggle('less');
    });
</script>
<script src="js/scrollAnimation.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>