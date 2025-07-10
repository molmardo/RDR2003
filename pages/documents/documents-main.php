<!DOCTYPE html>
<html lang="hu">

<head>
    <?php include "include/head.php"; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $lang['footer']['documents']['h3'] ?> | RDR2003</title>
    <link rel="stylesheet" href="css/documents-main.css">
</head>

<body>
    <?php include "include/navigationbar.php"; ?>

    <div class="container documents-content">
        <h2 class="text-center">
            <?= $lang['footer']['documents']['h3'] ?>
        </h2>
        <div class="row g-4">
            <div class="services-grid">
                <div class="service-card">
                    <a href="<?= navLink('documents/privacy-policy') ?>">
                        <i class="fa-solid fa-book"></i>
                        <span><?= $lang['footer']['documents']['privacy-policy'] ?></span>
                    </a>
                </div>
                <div class="service-card">
                    <a href="<?= navLink('documents/gdpr') ?>">
                        <i class="fa-solid fa-book"></i>
                        <span><?= $lang['footer']['documents']['gdpr'] ?></span>
                    </a>
                </div>
                <div class="service-card">
                    <a href="<?= navLink('documents/cookie-policy') ?>">
                        <i class="fa-solid fa-book"></i>
                        <span><?= $lang['footer']['documents']['cookie-policy'] ?></span>
                    </a>
                </div>
                <div class="service-card">
                    <a href="<?= navLink('documents/impressum') ?>">
                        <i class="fa-solid fa-book"></i>
                        <span><?= $lang['footer']['documents']['impressum'] ?></span>
                    </a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>