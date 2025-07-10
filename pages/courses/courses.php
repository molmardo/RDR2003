<!DOCTYPE html>
<html lang="hu">

<head>
    <?php include "include/head.php"; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $lang['courses']['h2'] ?> | RDR2003</title>
    <link rel="stylesheet" href="css/documents-main.css">
</head>

<body>
    <?php include "include/navigationbar.php"; ?>

    <div class="container documents-content">
        <h2 class="text-center">
            <?= $lang['courses']['h2'] ?>
        </h2>
        <div class="row g-4">
            <div class="services-grid">
                <div class="service-card">
                    <a href="<?= navLink('courses/austrian-adr-course') ?>">
                        <i class="fa-solid fa-book"></i>
                        <span><?= $lang['courses']['austrian-adr-course']['h3'] ?></span>
                    </a>
                </div>
                <div class="service-card">
                    <a href="<?= navLink('courses/courses-in-hungary') ?>">
                        <i class="fa-solid fa-book"></i>
                        <span><?= $lang['courses']['courses-in-hungary']['h3'] ?></span>
                    </a>
                </div>
                <div class="service-card">
                    <a href="<?= navLink('courses/hungarian-adr-course') ?>">
                        <i class="fa-solid fa-book"></i>
                        <span><?= $lang['courses']['hungarian-adr-course']['h3'] ?></span>
                    </a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>