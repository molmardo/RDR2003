<!DOCTYPE html>
<html lang="hu">

<head>
    <?php include "include/head.php"; ?>
    <title>RDR2003</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include "include/navigationbar.php"; ?>
    <!-- <header>
        <div class="container">
            <h1 data-i18n="header.mainTitle">Komplex képzési megoldások fuvarozóknak</h1>
            <p class="subtitle" data-i18n="header.subtitle"> GKI, ADR tanfolyamok és szakmai irányítói képzés egy helyen</p>
            <div class="cta-buttons">
                <a href="#tanfolyamok" class="main-button" data-i18n="header.courseButton">Tanfolyamaink</a>
            </div>
        </div>
    </header> -->
    <header>
        <video autoplay muted playsinline class="bg-video">
            <source src="videos/header2.mp4" type="video/mp4">
            A videó nem elérhető ebben a böngészőben.
        </video>
        <div class="container">
            <h1 data-i18n="header.mainTitle">Komplex képzési megoldások fuvarozóknak</h1>
            <p class="subtitle" data-i18n="header.subtitle">
                GKI, ADR tanfolyamok és szakmai irányítói képzés egy helyen
            </p>
            <div class="cta-buttons">
                <a href="#tanfolyamok" class="header-button" data-i18n="header.courseButton">Tanfolyamaink</a>
            </div>
        </div>
    </header>



    <!-- Training -->
    <section class="container mx-auto training" id="tanfolyamok">
        <h2 class="text-center" data-i18n="training.mainTitle">Tanfolyamaink</h2>
        <div class="row g-4 mt-3">
            <div class="col-md-4 ScrollDownLeft">
                <div class="card">
                    <img src="imgs/pexels-500photos-com-15338-93398.jpg" alt="">
                    <div class="card-body d-flex flex-column">
                        <a href="<?= BASE_URL . $routes['osztakAdrTanfolyam']['path'] ?>">
                            <h3 class="card-title"><span data-i18n="training.trainingADRAT.h3">Osztrák ADR tanfolyam</span> <i class="fa fa-angle-right"></i></h3>
                        </a>
                        <p class="card-tex" data-i18n="training.trainingADRAT.information">Ausztriában végzett, hivatalos veszélyesáru-szállítási képzések magyar nyelven.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ScrollDownDown">
                <div class="card">
                    <img src="imgs/pexels-markusspiske-172074.jpg" alt="">
                    <div class="card-body d-flex flex-column">
                        <a href="<?= BASE_URL . $routes['magyarorszagiTanfolyamok']['path'] ?>">
                            <h3 class="card-title"><span data-i18n="training.trainingHU.h3">Magyarországi tanfolyamok</span> <i class="fa fa-angle-right"></i></h3>
                        </a>
                        <p class="card-tex" data-i18n="training.trainingHU.information">Magyarországon elérhető felnőttképzések a közlekedési, fuvarozási szektor számára.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ScrollDownRight">
                <div class="card">
                    <img src="imgs/pexels-quintingellar-2199293.jpg" alt="">
                    <div class="card-body d-flex flex-column">
                        <a href="<?= BASE_URL . $routes['magyarAdrTanfolyam']['path'] ?>">
                            <h3 class="card-title"><span data-i18n="training.trainingADRHU.h3">Magyarországi ADR tanfolyam</span> <i class="fa fa-angle-right"></i></h3>
                        </a>
                        <p class="card-tex" data-i18n="training.trainingADRHU.information">Az ADR 1.3. fejezete szerinti „kisadr” képzés</p>
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
                    <h2 class="mb-4" data-i18n="aboutUs.h2">Rólunk</h2>
                    <p data-i18n="aboutUs.information">
                        Több mint két évtizedes tapasztalatunkkal nem csupán szolgáltatást, hanem valódi, értékalapú partnerséget kínálunk. Minden ügyfelünkkel egyedi úton járunk: megértjük működésüket, céljaikat és a hozzájuk vezető legbiztonságosabb utat. Hiszünk abban, hogy az igazi szakmaiság nem sablonokban, hanem személyre szabott megoldásokban mutatkozik meg.
                    </p>
                    <p>
                        <q data-i18n="aboutUs.quote">Szakértelem, amely előnyt teremt.</q>
                    </p>
                    <a href="<?= BASE_URL . $routes['rolunk']['path'] ?>" data-i18n="aboutUs.button" class="main-button">Munkatársaink</a>
                </div>
                <div class="col-md-6 ScrollDownRight">
                    <img src="imgs/man-with-photo-camera-his-holidays.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Why choose -->
    <section class="container why-choose-full">
        <div class="why-choose">
            <div class="row align-items-center">
                <div class="col-md-6 ScrollDownLeft">
                    <img src="imgs/two-guys-talking-about-work-work-garage-near-truck-transfer-documents-with-goods.jpg" alt="">
                </div>
                <div class="col-md-6 ScrollDownRight">
                    <h2 data-i18n="whyChoose.h2">Miért válassza a RDR2003-at?</h2>
                    <div>
                        <div>
                            <span data-i18n="whyChoose.info1.span">Tapasztalt oktatók</span>
                            <p data-i18n="whyChoose.info1.p">Szakértő oktatóink naprakész tudással rendelkeznek.</p>
                        </div>
                        <div>
                            <span data-i18n="whyChoose.info2.span">Szórakoztató tanulás</span>
                            <p data-i18n="whyChoose.info2.p">Modern, interaktív oktatási módszerek.</p>
                        </div>
                        <div>
                            <span data-i18n="whyChoose.info3.span">Rugalmas időpontok</span>
                            <p data-i18n="whyChoose.info3.p">Az Ön időbeosztásához igazodó tanfolyamok.</p>
                        </div>
                        <div>
                            <span data-i18n="whyChoose.info4.span">Több helyszín</span>
                            <p data-i18n="whyChoose.info4.p">Több helyszínen is ott vagyunk.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="logos ScrollDownTransparent">
            <h2 data-i18n="partners.h2">Partnereink</h2>
            <div class="logos-slide">
                <img src="partners/BTlogo_100.png" alt="ceglogo">
                <img src="partners/Calderys_Orange-Noir_1.png.png" alt="ceglogo">
                <img src="partners/ecorisk_logo.svg" alt="ceglogo">
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
                <h2 class="mt-3 mb-3" data-i18n="contact.h2">Lépjen velünk kapcsolatba</h2>
                <form id="contactForm" method="post">
                    <!-- Üzenetdoboz -->
                    <div id="formMessage" class="alert d-none mt-2" role="alert"></div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Gibsz Jakab" required>
                        <label for="name" data-i18n="contact.form.name">Név</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                        <label for="email" data-i18n="contact.form.email">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="+36123456789">
                        <label for="phone" data-i18n="contact.form.phone">Telefonszám</label>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Írd meg az üzenetedet" id="message" name="message" style="height: 100px" required></textarea>
                        <label for="message" data-i18n="contact.form.msg">Üzenet</label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="adatkezeles" name="adatkezeles" required>
                        <label class="form-check-label" for="adatkezeles">
                            Elfogadom az <a href="<?= BASE_URL . $routes['privacy-policy']['path'] ?>" target="_blank">adatkezelési tájékoztatót</a>.
                        </label>
                    </div>
                    <br>
                    <!-- <div class="g-recaptcha mb-3" data-sitekey="6LfeBiQrAAAAAHwaRdPJreFhlif2tcB829Wxm-pH"></div> -->
                    <button type="submit" class="main-button" data-i18n="contact.form.button">Küldés</button>
                </form>
            </div>
            <div class="col-md-6">
                <div class="contact-info">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2697.8863595940325!2d18.901858076867352!3d47.45315459856045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4741e0728216be49%3A0x2a972f42c44fc056!2zVMO2csO2a2LDoWxpbnQsIFTDs3BhcmsgdS4gMWEsIDIwNDU!5e0!3m2!1shu!2shu!4v1745434769485!5m2!1shu!2shu" width="100%" height="350" style="border:0; border-radius: 12px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <div>
                        <h3 data-i18n="contact.informations.contactDetails.h3">
                            Elérhetőségeink
                        </h3>
                        <span><i class="fas fa-envelope"></i> <a href="mailto:rdr2003@rdr2003.hu">rdr2003@rdr2003.hu</a></span><br>
                        <?php foreach ($phone_numbers as $phone_number): ?>
                            <span><i class="fas fa-mobile-screen-button fa-xl"></i> <?php echo htmlspecialchars($phone_number); ?></span><br>
                        <?php endforeach; ?>
                        <h3 data-i18n="contact.informations.location.h3">Helyszín</h3>
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

                        $valasz = "<span class='closeHours' data-i18n='contact.informations.openingHours.close'>Zárva</span>";

                        if (isset($nyitvatartas[$nap]) && $nyitvatartas[$nap] !== null) {
                            [$nyit, $zar] = $nyitvatartas[$nap];
                            $nyitas = DateTime::createFromFormat('H:i', $nyit);
                            $zaras  = DateTime::createFromFormat('H:i', $zar);
                            $elotte30 = (clone $nyitas)->modify('-30 minutes');
                            $elotteZaras30 = (clone $zaras)->modify('-30 minutes');

                            if ($idoMost < $elotte30) {
                                $valasz =
                                    "<span class='closeHours' data-i18n='contact.informations.openingHours.close'>Zárva</span>";
                            } elseif ($idoMost >= $elotte30 && $idoMost < $nyitas) {
                                $valasz = "<span class='openingSoon' data-i18n='contact.informations.openingHours.openingSoon'>Hamarosan nyit";
                            } elseif ($idoMost >= $nyitas && $idoMost < $elotteZaras30) {
                                $valasz = "<span class='openHours' data-i18n='contact.informations.openingHours.open'>Nyitva";
                            } elseif ($idoMost >= $elotteZaras30 && $idoMost < $zaras) {
                                $valasz = "<span class='closingSoon' data-i18n='contact.informations.openingHours.closingSoon'>Hamarosan zár";
                            } else {
                                $valasz = "<span class='closeHours' data-i18n='contact.informations.openingHours.close'>Zárva</span>";
                            }
                        }
                        ?>

                        <h3><span data-i18n="contact.informations.openingHours.h3">Nyitvatartás:</span> <span class="openingTime"><?php echo $valasz; ?></span></h3>
                        <table>
                            <tr>
                                <td data-i18n="contact.informations.openingHours.monday">Hétfő</td>
                                <td>8:00-16:00</td>
                            </tr>
                            <tr>
                                <td data-i18n="contact.informations.openingHours.tuesday">Kedd</td>
                                <td>8:00-16:00</td>
                            </tr>
                            <tr>
                                <td data-i18n="contact.informations.openingHours.wednesday">Szerda</td>
                                <td>8:00-16:00</td>
                            </tr>
                            <tr>
                                <td data-i18n="contact.informations.openingHours.thursady">Csütörtök</td>
                                <td>8:00-16:00</td>
                            </tr>
                            <tr>
                                <td data-i18n="contact.informations.openingHours.friday">Péntek</td>
                                <td>8:00-15:00</td>
                            </tr>
                            <tr>
                                <td data-i18n="contact.informations.openingHours.saturday">Szombat</td>
                                <td>Zárva</td>
                            </tr>
                            <tr>
                                <td data-i18n="contact.informations.openingHours.sunday">Vasárnap</td>
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
<script src="js/scrollanimation.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script>
    document.getElementById("contactForm").addEventListener("submit", async function(e) {
        e.preventDefault(); // oldalfrissítés kikapcsolása

        const form = e.target;
        const formData = new FormData(form);
        const messageBox = document.getElementById("formMessage");

        // Üzenet doboz reset
        messageBox.classList.add("d-none");
        messageBox.classList.remove("alert-success", "alert-danger");
        messageBox.innerText = "";

        // Frontend validáció (extra biztonság)
        const email = formData.get("email");
        const name = formData.get("name");
        const message = formData.get("message");

        if (!email || !name || !message) {
            messageBox.innerText = "Kérlek, tölts ki minden kötelező mezőt!";
            messageBox.classList.add("alert-danger");
            messageBox.classList.remove("d-none");
            return;
        }

        try {
            const response = await fetch("https://rdr2003.weboldal-gyorsan.hu/send_contact_mail", {
                method: "POST",
                body: formData,
            });

            const resultText = await response.text();

            if (response.ok) {
                messageBox.innerText = resultText;
                messageBox.classList.add("alert-success");
                form.reset(); // üríti az űrlapot
            } else {
                messageBox.innerText = resultText;
                messageBox.classList.add("alert-danger");
            }

            messageBox.classList.remove("d-none");

        } catch (error) {
            messageBox.innerText = "Hiba történt a küldés során.";
            messageBox.classList.add("alert-danger");
            messageBox.classList.remove("d-none");
        }
    });
</script>