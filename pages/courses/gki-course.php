<!DOCTYPE html>
<html lang="hu">

<head>
    <?php include "include/head.php"; ?>
    <title><?= $lang['gki-page']['title'] ?> | RDR2003</title>
    <link rel="stylesheet" href="css/tanfolyamok-css.css">
</head>

<body>
    <?php include "include/navigationbar.php"; ?>

    <div class="container">
        <div class="adr">
            <img src="imgs/pexels-eduardo199o9-178988127-17824889.jpg" alt="<?= $lang['gki-page']['title'] ?>" class="header-img">
            <div class="adr-data">
                <h1 class="text-center"><?= $lang['gki-page']['title'] ?></h1>

                <section>
                    <h2><?= $lang['gki-page']['section1']['h2'] ?></h2>
                    <p><strong><?= $lang['gki-page']['section1']['type_label'] ?></strong><?= $lang['gki-page']['section1']['type'] ?></p>
                    <p><strong><?= $lang['gki-page']['section1']['sim_label'] ?></strong><?= $lang['gki-page']['section1']['sim'] ?></p>
                    <p><strong><?= $lang['gki-page']['section1']['exam_label'] ?></strong><?= $lang['gki-page']['section1']['exam'] ?></p>
                    <div class="highlight">
                        <ul>
                            <li><?= $lang['gki-page']['section1']['li1'] ?></li>
                            <li><?= $lang['gki-page']['section1']['li2'] ?></li>
                            <li><?= $lang['gki-page']['section1']['li3'] ?></li>
                            <li><?= $lang['gki-page']['section1']['li4'] ?></li>
                        </ul>
                    </div>
                </section>

                <section>
                    <h2><?= $lang['gki-page']['section2']['h2'] ?></h2>
                    <p><strong><?= $lang['gki-page']['section2']['type_label'] ?></strong><?= $lang['gki-page']['section2']['type'] ?></p>
                    <p><strong><?= $lang['gki-page']['section2']['sim_label'] ?></strong><?= $lang['gki-page']['section2']['sim'] ?></p>
                    <p><strong><?= $lang['gki-page']['section2']['exam_label'] ?></strong><?= $lang['gki-page']['section2']['exam'] ?></p>
                </section>

                <section>
                    <h2><?= $lang['gki-page']['section3']['h2'] ?></h2>
                    <ul>
                        <li><?= $lang['gki-page']['section3']['li1'] ?></li>
                        <li><?= $lang['gki-page']['section3']['li2'] ?></li>
                        <li><?= $lang['gki-page']['section3']['li3'] ?></li>
                        <li><?= $lang['gki-page']['section3']['li4'] ?></li>
                        <li><?= $lang['gki-page']['section3']['li5'] ?></li>
                        <li><?= $lang['gki-page']['section3']['li6'] ?></li>
                        <li><?= $lang['gki-page']['section3']['li7'] ?></li>
                    </ul>
                </section>

                <section>
                    <h2><?= $lang['gki-page']['section4']['h2'] ?></h2>
                    <table>
                        <thead>
                            <tr>
                                <th><?= $lang['gki-page']['section4']['th1'] ?></th>
                                <th><?= $lang['gki-page']['section4']['th2'] ?></th>
                            </tr>
                        </thead>
                        <tbody class="price">
                            <tr>
                                <td><?= $lang['gki-page']['section4']['row1']['name'] ?></td>
                                <td><?= $lang['gki-page']['section4']['row1']['price'] ?></td>
                            </tr>
                            <tr>
                                <td><?= $lang['gki-page']['section4']['row2']['name'] ?></td>
                                <td><?= $lang['gki-page']['section4']['row2']['price'] ?></td>
                            </tr>
                            <tr>
                                <td><?= $lang['gki-page']['section4']['row3']['name'] ?></td>
                                <td><?= $lang['gki-page']['section4']['row3']['price'] ?></td>
                            </tr>
                            <tr>
                                <td><?= $lang['gki-page']['section4']['row4']['name'] ?></td>
                                <td><?= $lang['gki-page']['section4']['row4']['price'] ?></td>
                            </tr>
                            <tr>
                                <td><?= $lang['gki-page']['section4']['row5']['name'] ?></td>
                                <td><?= $lang['gki-page']['section4']['row5']['price'] ?></td>
                            </tr>
                            <tr>
                                <td><?= $lang['gki-page']['section4']['row6']['name'] ?></td>
                                <td><?= $lang['gki-page']['section4']['row6']['price'] ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="highlight">
                        <p><strong><?= $lang['gki-page']['section4']['discount_label'] ?></strong> <?= $lang['gki-page']['section4']['discount'] ?></p>
                        <p><em><?= $lang['gki-page']['section4']['valid_from'] ?></em></p>
                    </div>
                </section>

                <section>
                    <h2><?= $lang['gki-page']['section5']['h2'] ?></h2>
                    <ul>
                        <li><?= $lang['gki-page']['section5']['li1'] ?></li>
                        <li><?= $lang['gki-page']['section5']['li2'] ?></li>
                        <li><?= $lang['gki-page']['section5']['li3'] ?></li>
                    </ul>
                    <?php include "include/course-application-form.php"; ?>
                </section>

            </div>
        </div>
    </div>


    <?php include "include/footer.php"; ?>
</body>

</html>

<script src="js/application-form.js"></script>