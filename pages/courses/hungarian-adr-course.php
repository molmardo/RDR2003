<!DOCTYPE html>
<html lang="hu">

<head>
    <?php include "include/head.php"; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $lang['hungarian-adr-courses']['title'] ?> | RDR2003</title>
    <link rel="stylesheet" href="css/hungarian-adr-course.css">
</head>

<body>
    <?php include "include/navigationbar.php"; ?>


    <div class="container hungarian-adr-courses">
        <div class="adr">
            <img src="imgs/pexels-quintingellar-2199293.jpg" alt="ADR 1.3 képzés" class="header-img">
            <h1 class="text-center mt-3"><?= $lang['hungarian-adr-courses']['title'] ?></h1>

            <div class="row g-4">
                <div class="services-grid">
                    <div class="service-card">
                        <i class="fa-solid fa-lock"></i>
                        <span><?= $lang['hungarian-adr-courses']['services']['safety'] ?></span>
                    </div>
                    <div class="service-card">
                        <i class="fa-solid fa-scale-balanced"></i>
                        <span><?= $lang['hungarian-adr-courses']['services']['compliance'] ?></span>
                    </div>
                    <div class="service-card">
                        <i class="fa-solid fa-brain"></i>
                        <span><?= $lang['hungarian-adr-courses']['services']['practical'] ?></span>
                    </div>
                </div>
            </div>

            <section>
                <p><?= $lang['hungarian-adr-courses']['section1']['p1'] ?></p>
                <p><?= $lang['hungarian-adr-courses']['section1']['p2'] ?></p>
                <p><?= $lang['hungarian-adr-courses']['section1']['p3'] ?></p>
            </section>

            <section>
                <h2><?= $lang['hungarian-adr-courses']['section2']['title'] ?></h2>
                <ul>
                    <li><?= $lang['hungarian-adr-courses']['section2']['list'][0] ?></li>
                    <li><?= $lang['hungarian-adr-courses']['section2']['list'][1] ?></li>
                    <li><?= $lang['hungarian-adr-courses']['section2']['list'][2] ?></li>
                    <li><?= $lang['hungarian-adr-courses']['section2']['list'][3] ?></li>
                    <li><?= $lang['hungarian-adr-courses']['section2']['list'][4] ?></li>
                </ul>
            </section>
        </div>
    </div>

    <?php include "include/basic-application-form.php"; ?>
    </div>
    </div>
    <?php include "include/footer.php"; ?>
</body>

</html>