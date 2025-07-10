<!DOCTYPE html>
<html lang="hu">

<head>
    <?php include "include/head.php"; ?>
    <title><?= $lang['privacy-policy']['section1']['h2'] ?></title>
    <link rel="stylesheet" href="css/privacy-policy.css">
</head>

<body>
    <?php include "include/navigationbar.php"; ?>

    <div class="container privacy-content">
        <h1 class="text-center mb-4"><?= $lang['privacy-policy']['title'] ?></h1>

        <div class="section">
            <h2><?= $lang['privacy-policy']['section1']['h2'] ?></h2>
            <p><?= $lang['privacy-policy']['section1']['p'] ?></p>
        </div>

        <div class="section">
            <h2><?= $lang['privacy-policy']['section2']['h2'] ?></h2>
            <p><strong><?= $lang['privacy-policy']['section2']['company_label'] ?></strong><?= $lang['privacy-policy']['section2']['company'] ?></p>
            <p><strong><?= $lang['privacy-policy']['section2']['address_label'] ?></strong><?= $lang['privacy-policy']['section2']['address'] ?></p>
            <p><strong><?= $lang['privacy-policy']['section2']['email_label'] ?></strong><?= $lang['privacy-policy']['section2']['email'] ?></p>
        </div>

        <div class="section">
            <h2><?= $lang['privacy-policy']['section3']['h2'] ?></h2>
            <p><?= $lang['privacy-policy']['section3']['p'] ?></p>
            <ul>
                <li><?= $lang['privacy-policy']['section3']['li1'] ?></li>
                <li><?= $lang['privacy-policy']['section3']['li2'] ?></li>
                <li><?= $lang['privacy-policy']['section3']['li3'] ?></li>
            </ul>
            <p><?= $lang['privacy-policy']['section3']['legal'] ?></p>
        </div>

        <div class="section">
            <h2><?= $lang['privacy-policy']['section4']['h2'] ?></h2>
            <ul>
                <li><?= $lang['privacy-policy']['section4']['li1'] ?></li>
                <li><?= $lang['privacy-policy']['section4']['li2'] ?></li>
                <li><?= $lang['privacy-policy']['section4']['li3'] ?></li>
            </ul>
            <p><?= $lang['privacy-policy']['section4']['p'] ?></p>
        </div>

        <div class="section">
            <h2><?= $lang['privacy-policy']['section5']['h2'] ?></h2>
            <p><?= $lang['privacy-policy']['section5']['p'] ?></p>
        </div>

        <div class="section">
            <h2><?= $lang['privacy-policy']['section6']['h2'] ?></h2>
            <p><?= $lang['privacy-policy']['section6']['p1'] ?></p>
            <p><?= $lang['privacy-policy']['section6']['p2'] ?></p>
        </div>

        <div class="section">
            <h2><?= $lang['privacy-policy']['section7']['h2'] ?></h2>
            <p><?= $lang['privacy-policy']['section7']['p'] ?></p>
            <ul>
                <li><?= $lang['privacy-policy']['section7']['li1'] ?></li>
                <li><?= $lang['privacy-policy']['section7']['li2'] ?></li>
            </ul>
        </div>

        <div class="section">
            <h2><?= $lang['privacy-policy']['section8']['h2'] ?></h2>
            <p><?= $lang['privacy-policy']['section8']['p'] ?></p>
            <ul>
                <li><?= $lang['privacy-policy']['section8']['li1'] ?></li>
                <li><?= $lang['privacy-policy']['section8']['li2'] ?></li>
                <li><?= $lang['privacy-policy']['section8']['li3'] ?></li>
                <li><?= $lang['privacy-policy']['section8']['li4'] ?></li>
                <li><?= $lang['privacy-policy']['section8']['li5'] ?></li>
                <li><?= $lang['privacy-policy']['section8']['li6'] ?></li>
            </ul>
            <p>
                <?= $lang['privacy-policy']['section8']['naih'] ?><br>
                Web: <a href="https://www.naih.hu" target="_blank">https://www.naih.hu</a><br>
                <?= $lang['privacy-policy']['section8']['address'] ?><br>
                <?= $lang['privacy-policy']['section8']['phone'] ?><br>
                <?= $lang['privacy-policy']['section8']['email'] ?>
            </p>
        </div>

        <div class="section">
            <h2><?= $lang['privacy-policy']['section9']['h2'] ?></h2>
            <p><?= $lang['privacy-policy']['section9']['p1'] ?></p>
            <p><?= $lang['privacy-policy']['section9']['p2'] ?>
                <a href="<?= BASE_URL . $routes['cookie']['path'] ?>"><?= $lang['privacy-policy']['section9']['link'] ?></a>
            </p>
        </div>

        <div class="section">
            <h2><?= $lang['privacy-policy']['section10']['h2'] ?></h2>
            <p><?= $lang['privacy-policy']['section10']['p'] ?></p>
        </div>

        <div class="section">
            <p class="text-muted"><?= $lang['privacy-policy']['last_updated'] ?></p>
        </div>
    </div>

    <?php include "include/footer.php"; ?>
    <?php include "include/cookie_notice.php"; ?>

</body>

</html>