<!DOCTYPE html>
<html lang="hu">

<head>
    <?php include "include/head.php"; ?>
    <title>Furgon Bérlés</title>
    <link rel="stylesheet" href="css/rent.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=mode_fan" />
</head>

<body>
    <?php include "include/navigationbar.php"; ?>
    <div class="container rent">
        <div class="row">
            <div class="col-lg-7 col-sm-12">
                <img src="imgs/szemelyszallito_furgonok.jpg" alt="<?= $lang['vanrent']['contact']['title'] ?> img" class="img-fluid">
            </div>
            <div class="col-lg-5 col-sm-12 contact">
                <h3><?= $lang['vanrent']['contact']['title'] ?></h3>
                <div class="contact-item">
                    <span><i class="fas fa-phone fa-xl"></i> <?= $lang['vanrent']['contact']['phone'] ?></span>
                </div>
                <div class="contact-item">
                    <span><i class="fas fa-envelope"></i> <?= $lang['vanrent']['contact']['email'] ?></span>
                </div>
                <div class="contact-item">
                    <span><i class="fas fa-location-arrow"></i> <?= $lang['vanrent']['contact']['address'] ?></span>
                </div>
                <?php include "include/basic-application-form.php"; ?>
            </div>

            <div class="col-lg-12 services">
                <div class="services-grid">
                    <div class="service-card"><i class="fas fa-van-shuttle"></i><span><?= $lang['vanrent']['services']['passenger'] ?></span></div>
                    <div class="service-card"><i class="fas fa-users"></i><span><?= $lang['vanrent']['services']['capacity'] ?></span></div>
                    <div class="service-card"><i class="fas fa-snowflake"></i><span><?= $lang['vanrent']['services']['ac'] ?></span></div>
                    <div class="service-card"><i class="fas fa-suitcase-rolling"></i><span><?= $lang['vanrent']['services']['trunk'] ?></span></div>
                    <div class="service-card"><i class="fas fa-car-side"></i><span><?= $lang['vanrent']['services']['trips'] ?></span></div>
                    <div class="service-card"><i class="fas fa-id-card"></i><span><?= $lang['vanrent']['services']['license'] ?></span></div>
                    <div class="service-card"><i class="fas fa-user-tie"></i><span><?= $lang['vanrent']['services']['driver'] ?></span></div>
                    <div class="service-card"><i class="fas fa-road"></i><span><?= $lang['vanrent']['services']['ideal'] ?></span></div>
                </div>
            </div>

            <div class="col-lg-12 decription">
                <h4><?= $lang['vanrent']['desc']['h1'] ?></h4>
                <p><?= $lang['vanrent']['desc']['p1'] ?></p>

                <h4><?= $lang['vanrent']['desc']['h2'] ?></h4>
                <p><?= $lang['vanrent']['desc']['p2'] ?></p>

                <h4><?= $lang['vanrent']['desc']['h3'] ?></h4>
                <p><?= $lang['vanrent']['desc']['p3'] ?></p>

                <h4><?= $lang['vanrent']['desc']['h4'] ?></h4>
                <p><?= $lang['vanrent']['desc']['p4'] ?></p>

                <h4><?= $lang['vanrent']['desc']['h5'] ?></h4>
                <p><?= $lang['vanrent']['desc']['p5'] ?></p>
            </div>
        </div>
    </div>


    <?php include "include/footer.php" ?>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>