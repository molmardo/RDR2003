<!DOCTYPE html>
<html lang="hu">

<head>
    <?php include "include/head.php"; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $lang['advice-page']['title']?> | RDR2003</title>
    <link rel="stylesheet" href="css/advice.css">
</head>

<body>
    <?php include "include/navigationbar.php"; ?>


    <section class="container">

        <div class="row information">
            <div class="col-lg-6 col-md-12">
                <h1><?= $lang['advice-page']['title']?></h1>
                <p><?= $lang['advice-page']['content1']?></p>
            </div>
            <div class="col-lg-6 col-md-12">
                <img src="imgs/pexels-cowomen-1058097-2041627.jpg" alt="<?= $lang['advice-page']['title']?> img">
            </div>
        </div>
        <div class="row information">
            <div class="col-lg-6 col-md-12">
                <img src="imgs/pexels-seven11nash-380769.jpg" alt="<?= $lang['advice-page']['title']?> img">
            </div>
            <div class="col-lg-6 col-md-12">
                <h2><?= $lang['advice-page']['h2']?></h2>
                <p><?= $lang['advice-page']['content2']?></p>
                <p><strong></strong><?= $lang['advice-page']['content3']?></p>

            </div>
        </div>

        <div class="services">
            <h2><?= $lang['advice-page']['services']['h2']?></h2>
            <div class="service-item">
                <h3><?= $lang['advice-page']['services']['info-1-h3']?></h3>
                <p><?= $lang['advice-page']['services']['info-1-p']?></p>
            </div>
            <div class="service-item">
                <h3><?= $lang['advice-page']['services']['info-2-h3']?></h3>
                <p><?= $lang['advice-page']['services']['info-2-p']?></p>
            </div>
            <div class="service-item">
                <h3><?= $lang['advice-page']['services']['info-3-h3']?></h3>
                <p><?= $lang['advice-page']['services']['info-3-p']?></p>
            </div>
            <div class="service-item">
                <h3><?= $lang['advice-page']['services']['info-4-h3']?></h3>
                <p><?= $lang['advice-page']['services']['info-4-p']?></p>
            </div>
            <div class="service-item">
                <h3><?= $lang['advice-page']['services']['info-5-h3']?></h3>
                <p><?= $lang['advice-page']['services']['info-5-p']?></p>
            </div>
            <div class="service-item">
                <h3><?= $lang['advice-page']['services']['info-6-h3']?></h3>
                <p><?= $lang['advice-page']['services']['info-6-p']?></p>
            </div>
        </div>
        </div>


        <div class="when-needed">
            <h2><?= $lang['advice-page']['when-needed']['h2']?></h2>
            <ul class="checklist">
                <li><span class="checkmark">✔</span> <?= $lang['advice-page']['when-needed']['li1']?></li>
                <li><span class="checkmark">✔</span> <?= $lang['advice-page']['when-needed']['li2']?></li>
                <li><span class="checkmark">✔</span> <?= $lang['advice-page']['when-needed']['li3']?></li>
                <li><span class="checkmark">✔</span> <?= $lang['advice-page']['when-needed']['li4']?></li>
                <li><span class="checkmark">✔</span> <?= $lang['advice-page']['when-needed']['li5']?></li>
            </ul>
        </div>


        <?php include "include/basic-application-form.php"; ?>
    </section>

        <?php include "include/footer.php"; ?>
</body>

</html>