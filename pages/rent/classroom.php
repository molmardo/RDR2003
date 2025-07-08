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
                <img src="imgs/tanterem.jpg" alt="<?= $lang['rent-classroom']['contact']['title'] ?> img" class="img-fluid">
            </div>
            <div class="col-lg-5 col-sm-12 contact">
                <h3><?= $lang['rent-classroom']['contact']['title'] ?></h3>
                <div class="contact-item">
                    <span><i class="fas fa-phone fa-xl"></i> <?= $lang['rent-classroom']['contact']['phone'] ?></span>
                </div>
                <div class="contact-item">
                    <span><i class="fas fa-envelope"></i> <?= $lang['rent-classroom']['contact']['email'] ?></span>
                </div>
                <div class="contact-item">
                    <span><i class="fas fa-location-arrow"></i> <?= $lang['rent-classroom']['contact']['address'] ?></span>
                </div>
                <?php include "include/basic-application-form.php"; ?>
            </div>

            <div class="col-lg-12 services">
                <div class="services-grid">
                    <div class="service-card"><i class="fas fa-couch"></i><span><?= $lang['rent-classroom']['services']['furniture'] ?></span></div>
                    <div class="service-card"><i class="fas fa-fan"></i><span><?= $lang['rent-classroom']['services']['ac'] ?></span></div>
                    <div class="service-card"><i class="fas fa-table"></i><span><?= $lang['rent-classroom']['services']['whiteboard'] ?></span></div>
                    <div class="service-card"><i class="fas fa-tv"></i><span><?= $lang['rent-classroom']['services']['projector'] ?></span></div>
                    <div class="service-card"><i class="fas fa-person-chalkboard"></i><span><?= $lang['rent-classroom']['services']['screen'] ?></span></div>
                    <div class="service-card"><i class="fas fa-utensils"></i><span><?= $lang['rent-classroom']['services']['catering'] ?></span></div>
                    <div class="service-card"><i class="fas fa-train-tram"></i><span><?= $lang['rent-classroom']['services']['transport'] ?></span></div>
                    <div class="service-card"><i class="fas fa-wifi"></i><span><?= $lang['rent-classroom']['services']['wifi'] ?></span></div>
                </div>
            </div>

            <div class="col-lg-12 decription">
                <h4><?= $lang['rent-classroom']['desc']['h1'] ?></h4>
                <p><?= $lang['rent-classroom']['desc']['p1'] ?></p>

                <h4><?= $lang['rent-classroom']['desc']['h2'] ?></h4>
                <p><?= $lang['rent-classroom']['desc']['p2'] ?></p>

                <h4><?= $lang['rent-classroom']['desc']['h3'] ?></h4>
                <p><?= $lang['rent-classroom']['desc']['p3'] ?></p>

                <h4><?= $lang['rent-classroom']['desc']['h4'] ?></h4>
                <p><?= $lang['rent-classroom']['desc']['p4'] ?></p>

                <h4><?= $lang['rent-classroom']['desc']['h5'] ?></h4>
                <p><?= $lang['rent-classroom']['desc']['p5'] ?></p>
            </div>
        </div>
    </div>

    <?php include "include/footer.php" ?>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>