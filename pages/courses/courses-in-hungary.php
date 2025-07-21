<!DOCTYPE html>
<html lang="hu">

<head>
    <?php include "include/head.php"; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $lang['courses']['courses-in-hungary']['h3'] ?> | RDR2003</title>
    <link rel="stylesheet" href="css/courses-in-hungary.css">
</head>

<body>
    <?php include "include/navigationbar.php"; ?>


    <div class="container hu-courses">
        <h1 class="text-center"><?= $lang['hu-courses']['title'] ?></h1>
        <div class="row g-3">
            <div class="col-lg-6 col-sm-12">
                <div>
                    <a href="<?= navLink('courses/gki-course') ?>">
                        <div class="course">
                            <img src="imgs/pexels-eduardo199o9-178988127-17824889.jpg" alt="<?= $lang['hu-courses']['gki']['title'] ?>">
                            <h3 class="mt-3"><?= $lang['hu-courses']['gki']['title'] ?></h3>
                            <p><?= $lang['hu-courses']['gki']['desc'] ?></p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div>
                    <a href="<?= navLink('courses/av-course') ?>">
                        <div class="course">
                            <img src="imgs/av.jpg" alt="<?= $lang['hu-courses']['iranyito']['title'] ?>">
                            <h3 class="mt-3"><?= $lang['hu-courses']['iranyito']['title'] ?></h3>
                            <p><?= $lang['hu-courses']['iranyito']['desc'] ?></p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>