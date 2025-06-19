<!DOCTYPE html>
<html lang="hu">

<head>
    <?php include "include/head.php"; ?>
    <title><?= $lang['cookie-page']['title'] ?></title>
    <link href="css/cookie-policy.css" rel="stylesheet">

</head>

<body>
    <?php include "include/navigationbar.php"; ?>

    <div class="container cookie-content">
        <h1><?= $lang['cookie-page']['title'] ?></h1>
        <p class="text-muted"><?= $lang['cookie-page']['effective_date'] ?></p>

        <div class="section">
            <p><?= $lang['cookie-page']['section0']['p'] ?></p>
        </div>

        <div class="section">
            <h2><?= $lang['cookie-page']['section1']['h2'] ?></h2>
            <p><?= $lang['cookie-page']['section1']['p'] ?></p>
        </div>

        <div class="section">
            <h2><?= $lang['cookie-page']['section2']['h2'] ?></h2>

            <h5><?= $lang['cookie-page']['section2']['a']['title'] ?></h5>
            <p><?= $lang['cookie-page']['section2']['a']['p1'] ?></p>
            <p><?= $lang['cookie-page']['section2']['a']['legal'] ?></p>

            <h5><?= $lang['cookie-page']['section2']['b']['title'] ?></h5>
            <p><?= $lang['cookie-page']['section2']['b']['p1'] ?></p>
            <p><?= $lang['cookie-page']['section2']['b']['p2'] ?></p>
            <p><?= $lang['cookie-page']['section2']['b']['legal'] ?></p>

            <h5><?= $lang['cookie-page']['section2']['c']['title'] ?></h5>
            <p><?= $lang['cookie-page']['section2']['c']['p1'] ?></p>
            <p><?= $lang['cookie-page']['section2']['c']['p2'] ?></p>
        </div>

        <div class="section">
            <h2><?= $lang['cookie-page']['section3']['h2'] ?></h2>
            <p><?= $lang['cookie-page']['section3']['p'] ?></p>
            <ul>
                <li><?= $lang['cookie-page']['section3']['li1'] ?></li>
                <li><?= $lang['cookie-page']['section3']['li2'] ?></li>
            </ul>
        </div>

        <div class="section">
            <h2><?= $lang['cookie-page']['section4']['h2'] ?></h2>
            <p><?= $lang['cookie-page']['section4']['p1'] ?></p>
            <ul>
                <li><?= $lang['cookie-page']['section4']['li1'] ?></li>
                <li><?= $lang['cookie-page']['section4']['li2'] ?></li>
            </ul>
            <p><?= $lang['cookie-page']['section4']['p2'] ?></p>
        </div>

        <div class="section">
            <h2><?= $lang['cookie-page']['section5']['h2'] ?></h2>
            <p><?= $lang['cookie-page']['section5']['p1'] ?></p>
            <p><?= $lang['cookie-page']['section5']['p2'] ?></p>

            <div class="browser-links">
                <p><?= $lang['cookie-page']['section5']['browsers'] ?></p>
                <a href="https://support.google.com/chrome/answer/95647" target="_blank">Google Chrome</a>
                <a href="https://support.mozilla.org/hu/kb/sutik-engedelyezese-es-tiltasa" target="_blank">Mozilla Firefox</a>
                <a href="https://support.apple.com/hu-hu/guide/safari/sfri11471/mac" target="_blank">Safari</a>
                <a href="https://support.microsoft.com/hu-hu/microsoft-edge/cookie-k-t%C3%B6rl%C3%A9se-a-microsoft-edge-ben-63947406-40ac-c3b8-57b9-2a946a29ae09" target="_blank">Edge</a>
            </div>
        </div>

        <div class="section">
            <h2><?= $lang['cookie-page']['section6']['h2'] ?></h2>
            <p><?= $lang['cookie-page']['section6']['p'] ?></p>
            <ul>
                <li><?= $lang['cookie-page']['section6']['li1'] ?></li>
                <li><?= $lang['cookie-page']['section6']['li2'] ?></li>
                <li><?= $lang['cookie-page']['section6']['li3'] ?></li>
                <li><?= $lang['cookie-page']['section6']['li4'] ?></li>
            </ul>
        </div>

        <div class="section">
            <h2><?= $lang['cookie-page']['section7']['h2'] ?></h2>
            <p><?= $lang['cookie-page']['section7']['p1'] ?></p>
            <p><?= $lang['cookie-page']['section7']['p2'] ?></p>
        </div>

        <div class="section">
            <p class="text-muted"><?= $lang['cookie-page']['last_updated'] ?></p>
        </div>
    </div>


    <?php include "include/footer.php"; ?>
    <?php include "include/cookie_notice.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>