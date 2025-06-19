<!DOCTYPE html>
<html lang="hu">

<head>
    <?php include "include/head.php"; ?>
    <title><?= $lang['impressum-page']['title'] ?> </title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/impressum.css">
</head>

<body>
    <?php include "include/navigationbar.php"; ?>

    <div class="container py-5 impressum-full">
        <h1 class="text-center mb-5"><?= $lang['impressum-page']['title'] ?></h1>

        <div class="section">
            <h2><?= $lang['impressum-page']['company_data']['h2'] ?></h2>
            <div class="contact-info">
                <p><strong><?= $lang['impressum-page']['company_data']['name_label'] ?></strong><?= $lang['impressum-page']['company_data']['name'] ?></p>
                <p><strong><?= $lang['impressum-page']['company_data']['address_label'] ?></strong><?= $lang['impressum-page']['company_data']['address'] ?></p>
                <p><strong><?= $lang['impressum-page']['company_data']['email_label'] ?></strong><?= $lang['impressum-page']['company_data']['email'] ?></p>
            </div>
        </div>

        <div class="section">
            <h2><?= $lang['impressum-page']['contact']['h2'] ?></h2>
            <div class="contact-info">
                <p><strong><?= $lang['impressum-page']['contact']['phone_label'] ?></strong><?= $lang['impressum-page']['contact']['phone'] ?></p>
                <p><strong><?= $lang['impressum-page']['contact']['email_label'] ?></strong><?= $lang['impressum-page']['contact']['email'] ?></p>
                <p><strong><?= $lang['impressum-page']['contact']['website_label'] ?></strong><?= $lang['impressum-page']['contact']['website'] ?></p>
            </div>
        </div>

        <div class="section" id="tarhelyszolgaltato">
            <h2><?= $lang['impressum-page']['hosting']['h2'] ?></h2>
            <div class="contact-info">
                <p><strong><?= $lang['impressum-page']['hosting']['provider_label'] ?></strong><?= $lang['impressum-page']['hosting']['provider'] ?></p>
                <p><strong><?= $lang['impressum-page']['hosting']['address_label'] ?></strong><?= $lang['impressum-page']['hosting']['address'] ?></p>
                <p><strong><?= $lang['impressum-page']['hosting']['email_label'] ?></strong><?= $lang['impressum-page']['hosting']['email'] ?></p>
                <p><strong><?= $lang['impressum-page']['hosting']['phone_label'] ?></strong><?= $lang['impressum-page']['hosting']['phone'] ?></p>
                <p><strong><?= $lang['impressum-page']['hosting']['website_label'] ?></strong><?= $lang['impressum-page']['hosting']['website'] ?></p>
            </div>
        </div>

        <div class="section">
            <h2><?= $lang['impressum-page']['legal']['h2'] ?></h2>
            <div class="contact-info">
                <p><strong><?= $lang['impressum-page']['legal']['registry_label'] ?></strong><?= $lang['impressum-page']['legal']['registry'] ?></p>
                <p><strong><?= $lang['impressum-page']['legal']['license_label'] ?></strong><?= $lang['impressum-page']['legal']['license'] ?></p>
                <p><strong><?= $lang['impressum-page']['legal']['chamber_label'] ?></strong><?= $lang['impressum-page']['legal']['chamber'] ?></p>
                <p><strong><?= $lang['impressum-page']['legal']['chamber_number_label'] ?></strong><?= $lang['impressum-page']['legal']['chamber_number'] ?></p>
            </div>
        </div>

        <div class="section">
            <h2><?= $lang['impressum-page']['disclaimer']['h2'] ?></h2>
            <div class="contact-info">
                <p><?= $lang['impressum-page']['disclaimer']['p'] ?></p>
            </div>
        </div>

        <div class="section">
            <p class="text-muted"><?= $lang['impressum-page']['last_updated'] ?></p>
        </div>
    </div>

    <?php include "include/footer.php"; ?>
    <?php include "include/cookie_notice.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>