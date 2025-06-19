<!DOCTYPE html>
<html lang="hu">

<head>
    <?php include "include/head.php"; ?>
    <title><?= $lang['privacy-page']['title'] ?></title>
    <link rel="stylesheet" href="css/privacy-policy.css">
</head>

<body>
    <?php include "include/navigationbar.php"; ?>

    <div class="container privacy-content">
        <h1 class="text-center mb-4"><?= $lang['privacy-page']['title'] ?></h1>

        <div class="section">
            <h2><?= $lang['privacy-page']['section1']['h2'] ?></h2>
            <p><?= $lang['privacy-page']['section1']['p'] ?></p>
        </div>

        <div class="section">
            <h2><?= $lang['privacy-page']['section2']['h2'] ?></h2>
            <p><strong><?= $lang['privacy-page']['section2']['company'] ?></strong></p>
            <p><strong><?= $lang['privacy-page']['section2']['address_label'] ?></strong><?= $lang['privacy-page']['section2']['address'] ?></p>
            <p><strong><?= $lang['privacy-page']['section2']['email_label'] ?></strong><?= $lang['privacy-page']['section2']['email'] ?></p>
        </div>

        <div class="section">
            <h2><?= $lang['privacy-page']['section3']['h2'] ?></h2>
            <ul>
                <?php foreach ($lang['privacy-page']['section3']['rights'] as $right): ?>
                    <li><strong><?= $right['title'] ?></strong><?= isset($right['desc']) ? ': ' . $right['desc'] : '' ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="section">
            <h2><?= $lang['privacy-page']['section4']['h2'] ?></h2>
            <p><?= $lang['privacy-page']['section4']['desc'] ?></p>
            <p>
                <strong><?= $lang['privacy-page']['section4']['authority'] ?></strong><br>
                <?= $lang['privacy-page']['section4']['address'] ?><br>
                <?= $lang['privacy-page']['section4']['phone'] ?><br>
                <?= $lang['privacy-page']['section4']['email'] ?><br>
                <?= $lang['privacy-page']['section4']['website'] ?>
            </p>
        </div>

        <div class="section">
            <h2><?= $lang['privacy-page']['section5']['h2'] ?></h2>
            <p><?= $lang['privacy-page']['section5']['p'] ?></p>
        </div>

        <div class="section">
            <p class="text-muted"><?= $lang['privacy-page']['last_updated'] ?></p>
        </div>
    </div>


    <?php include "include/footer.php"; ?>
    <?php include "include/cookie_notice.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>