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
        <video autoplay muted playsinline class="bg-video">
            <source src="videos/header2.mp4" type="video/mp4">
            <?= $lang['header']['video'] ?>
        </video>
        <div class="container">
            <h1><?= $lang['header']['h1'] ?></h1>
            <p class="subtitle">
                <?= $lang['header']['subtitle'] ?>
            </p>
            <div class="cta-buttons">
                <a href="<?= navLink() ?>#courses" class="header-button"><?= $lang['header']['button'] ?></a>
            </div>
        </div>
    </header>

    <!-- Training -->
    <section class="container mx-auto training" id="courses">
        <h2 class="text-center"><?= $lang['courses']['h2'] ?></h2>
        <div class="row g-4 mt-3">
            <div class="col-md-4 ScrollDownLeft">
                <div class="card">
                    <img src="imgs/pexels-500photos-com-15338-93398.jpg" alt="<?= $lang['courses']['austrian-adr-course']['h3'] ?>">
                    <div class="card-body d-flex flex-column">
                        <a href="<?= navLink('courses/austrian-adr-course') ?>">
                            <h3 class="card-title"><span><?= $lang['courses']['austrian-adr-course']['h3'] ?> </span> <i class="fa fa-angle-right"></i></h3>
                        </a>
                        <p class="card-tex"><?= $lang['courses']['austrian-adr-course']['p'] ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ScrollDownDown">
                <div class="card">
                    <img src="imgs/pexels-markusspiske-172074.jpg" alt="<?= $lang['courses']['courses-in-hungary']['h3'] ?>">
                    <div class="card-body d-flex flex-column">
                        <a href="<?= navLink('courses/courses-in-hungary') ?>">
                            <h3 class="card-title"><span><?= $lang['courses']['courses-in-hungary']['h3'] ?></span> <i class="fa fa-angle-right"></i></h3>
                        </a>
                        <p class="card-tex"><?= $lang['courses']['courses-in-hungary']['p'] ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ScrollDownRight">
                <div class="card">
                    <img src="imgs/pexels-quintingellar-2199293.jpg" alt="<?= $lang['courses']['hungarian-adr-course']['h3'] ?>">
                    <div class="card-body d-flex flex-column">
                        <a href="<?= navLink('courses/hungarian-adr-course') ?>">
                            <h3 class="card-title"><span><?= $lang['courses']['hungarian-adr-course']['h3'] ?> </span> <i class="fa fa-angle-right"></i></h3>
                        </a>
                        <p class="card-tex"><?= $lang['courses']['hungarian-adr-course']['p'] ?></p>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- About US -->
    <section class="about_us" id="about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 ScrollDownLeft">
                    <h2 class="mb-4"><?= $lang['about-us']['about-us'] ?></h2>
                    <p>
                        <?= $lang['about-us']['p'] ?>
                    </p>
                    <p>
                        <q><?= $lang['about-us']['q'] ?></q>
                    </p>
                    <a href="<?= navLink('our-colleagues'); ?>" class="main-button"><?= $lang['about-us']['button'] ?></a>
                </div>
                <div class="col-md-12 ScrollDownRight mt-3">
                    <img src="imgs/colleagues/team.jpg" alt="<?= $lang['about-us']['about-us'] ?>">
                </div>
            </div>
        </div>
    </section>
    <!-- Why choose -->
    <section class="container why-choose-full">
        <div class="why-choose">
            <div class="row align-items-center">
                <div class="col-md-6 ScrollDownLeft">
                    <img src="imgs/two-guys-talking-about-work-work-garage-near-truck-transfer-documents-with-goods.jpg" alt="<?= $lang['why-choose']['h2'] ?>">
                </div>
                <div class="col-md-6 ScrollDownRight">
                    <h2><?= $lang['why-choose']['h2'] ?></h2>
                    <div>
                        <div>
                            <span><?= $lang['why-choose']['info1']['span'] ?></span>
                            <p><?= $lang['why-choose']['info1']['p'] ?></p>
                        </div>
                        <div>
                            <span><?= $lang['why-choose']['info2']['span'] ?></span>
                            <p><?= $lang['why-choose']['info2']['p'] ?></p>
                        </div>
                        <div>
                            <span><?= $lang['why-choose']['info3']['span'] ?></span>
                            <p><?= $lang['why-choose']['info3']['p'] ?></p>
                        </div>
                        <div>
                            <span><?= $lang['why-choose']['info4']['span'] ?></span>
                            <p><?= $lang['why-choose']['info4']['p'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="logos ScrollDownTransparent">
            <h2><?= $lang['partners']['h2'] ?></h2>
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
    <section class="container" id="contact">
        <div class="row align-items-center ScrollDownDown">
            <div class="col-md-6">
                <h2 class="mt-3 mb-3"><?= $lang['contact']['h2'] ?></h2>
                <form id="contactForm" method="post">
                    <!-- Üzenetdoboz -->
                    <div id="formMessage" class="alert d-none mt-2" role="alert"></div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Gibsz Jakab" required>
                        <label for="name"><?= $lang['contact']['contactForm']['name'] ?></label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                        <label for="email"><?= $lang['contact']['contactForm']['email'] ?></label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="+36123456789">
                        <label for="phone"><?= $lang['contact']['contactForm']['phone'] ?></label>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="<?= $lang['contact']['contactForm']['msg-placeholder'] ?>" id="message" name="message" style="height: 100px" required></textarea>
                        <label for="message"><?= $lang['contact']['contactForm']['msg'] ?></label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="adatkezeles" name="adatkezeles" required>
                        <label class="form-check-label" for="adatkezeles">
                            <?= $lang['contact']['contactForm']['data-management']['part1'] ?> <a href="<?= navLink('documents/privacy-policy') ?>" target="_blank"><?= $lang['contact']['contactForm']['data-management']['part2'] ?></a>.
                        </label>
                    </div>
                    <br>
                    <!-- <div class="g-recaptcha mb-3" data-sitekey="6LfeBiQrAAAAAHwaRdPJreFhlif2tcB829Wxm-pH"></div> -->
                    <button type="submit" class="main-button"><?= $lang['contact']['contactForm']['button'] ?></button>
                </form>
            </div>
            <div class="col-md-6">
                <div class="contact-info">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2697.8863595940325!2d18.901858076867352!3d47.45315459856045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4741e0728216be49%3A0x2a972f42c44fc056!2zVMO2csO2a2LDoWxpbnQsIFTDs3BhcmsgdS4gMWEsIDIwNDU!5e0!3m2!1shu!2shu!4v1745434769485!5m2!1shu!2shu" width="100%" height="350" style="border:0; border-radius: 12px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <div>
                        <h3>
                            <?= $lang['contact']['contact-info']['h3'] ?>
                        </h3>
                        <span><i class="fas fa-envelope"></i> <a href="mailto:<?= $lang['default']['email']?>"><?= $lang['default']['email']?></a></span><br>
                        <?php foreach ($phone_numbers as $phone_number): ?>
                            <span><i class="fas fa-mobile-screen-button fa-xl"></i> <?php echo htmlspecialchars($phone_number); ?></span><br>
                        <?php endforeach; ?>
                        <h3><?= $lang['contact']['contact-info']['location']['h3'] ?></h3>
                        <span><i class="fas fa-location-arrow"></i> <?= $lang['contact']['contact-info']['location']['address'] ?> <br><span><?= $lang['contact']['contact-info']['location']['address-info'] ?></span></span>
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

                        $valasz = "<span class='closeHours'>". $lang['contact']['contact-info']['opening']['close'] ."</span>";

                        if (isset($nyitvatartas[$nap]) && $nyitvatartas[$nap] !== null) {
                            [$nyit, $zar] = $nyitvatartas[$nap];
                            $nyitas = DateTime::createFromFormat('H:i', $nyit);
                            $zaras  = DateTime::createFromFormat('H:i', $zar);
                            $elotte30 = (clone $nyitas)->modify('-30 minutes');
                            $elotteZaras30 = (clone $zaras)->modify('-30 minutes');

                            if ($idoMost < $elotte30) {
                                $valasz =
                                    "<span class='closeHours'>".$lang['contact']['contact-info']['opening']['close']."</span>";
                            } elseif ($idoMost >= $elotte30 && $idoMost < $nyitas) {
                                $valasz = "<span class='openingSoon'>".$lang['contact']['contact-info']['opening']['openingSoon']."</span>";
                            } elseif ($idoMost >= $nyitas && $idoMost < $elotteZaras30) {
                                $valasz = "<span class='openHours'>".$lang['contact']['contact-info']['opening']['open']."</span>";
                            } elseif ($idoMost >= $elotteZaras30 && $idoMost < $zaras) {
                                $valasz = "<span class='closingSoon'>".$lang['contact']['contact-info']['opening']['closingSoon']."</span>";
                            } else {
                                $valasz = "<span class='closeHours'>".$lang['contact']['contact-info']['opening']['close']."</span>";
                            }
                        }
                        ?>

                        <h3><span><?= $lang['contact']['contact-info']['openTime']?>:</span> <span class="openingTime"><?php echo $valasz; ?></span></h3>
                        <table>
                            <tr>
                                <td><?= $lang['contact']['contact-info']['days']['monday']?></td>
                                <td>8:00-16:00</td>
                            </tr>
                            <tr>
                                <td><?= $lang['contact']['contact-info']['days']['tuesday']?></td>
                                <td>8:00-16:00</td>
                            </tr>
                            <tr>
                                <td><?= $lang['contact']['contact-info']['days']['wednesday']?></td>
                                <td>8:00-16:00</td>
                            </tr>
                            <tr>
                                <td><?= $lang['contact']['contact-info']['days']['thursday']?></td>
                                <td>8:00-16:00</td>
                            </tr>
                            <tr>
                                <td><?= $lang['contact']['contact-info']['days']['friday']?></td>
                                <td>8:00-15:00</td>
                            </tr>
                            <tr>
                                <td><?= $lang['contact']['contact-info']['days']['saturday']?></td>
                                <td><?= $lang['contact']['contact-info']['opening']['close']?></td>
                            </tr>
                            <tr>
                                <td><?= $lang['contact']['contact-info']['days']['sunday']?></td>
                                <td><?= $lang['contact']['contact-info']['opening']['close']?></td>
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
            const response = await fetch("https://rdr2003.hu/form_functions/send_contact_mail", {
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