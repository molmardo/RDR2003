<!DOCTYPE html>
<html lang="hu">

<head>
    <?php include "include/head.php"; ?>
    <title><?= $lang['courses']['austrian-adr-course']['h3'] ?> | RDR2003</title>
    <link rel="stylesheet" href="css/tanfolyamok-css.css">
</head>

<body>
    <?php include "include/navigationbar.php"; ?>

    <div class="container">
        <div class="adr">
            <img src="imgs/pexels-500photos-com-15338-93398.jpg" alt="<?= $lang['adr-austria-page']['title'] ?>" class="header-img">
            <div class="adr-data">
                <h1 class="text-center mt-3 mb-3"><?= $lang['adr-austria-page']['title'] ?></h1>

                <section>
                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <h2><?= $lang['adr-austria-page']['dates']['h2'] ?></h2>
                            <p>
                                <?php
                                $dates = file('data/dates/austria-adr-times.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                                foreach ($dates as $date):
                                ?>
                                    <strong><?= htmlspecialchars($date) ?></strong><br>
                                <?php endforeach; ?>
                            </p>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="text-center">
                                <img src="imgs/adr.png" alt="ADR" class="adr-img">
                            </div>
                        </div>
                    </div>
                </section>

                <section>
                    <h2><?= $lang['adr-austria-page']['info']['h2'] ?></h2>
                    <ul>
                        <li class="highlight"><?= $lang['adr-austria-page']['info']['li1'] ?></li>
                        <li class="highlight"><?= $lang['adr-austria-page']['info']['li2'] ?></li>
                        <li class="highlight"><?= $lang['adr-austria-page']['info']['li3'] ?></li>
                    </ul>
                </section>

                <section>
                    <h2><?= $lang['adr-austria-page']['travel']['h2'] ?></h2>
                    <p><?= $lang['adr-austria-page']['travel']['p'] ?></p>
                </section>

                <section>
                    <h2><?= $lang['adr-austria-page']['location']['h2'] ?></h2>
                    <p><strong><?= $lang['adr-austria-page']['location']['place'] ?></strong><br><?= $lang['adr-austria-page']['location']['address'] ?></p>
                    <p><?= $lang['adr-austria-page']['location']['note'] ?></p>
                </section>

                <section>
                    <h2><?= $lang['adr-austria-page']['benefits']['h2'] ?></h2>
                    <ul>
                        <li><?= $lang['adr-austria-page']['benefits']['li1'] ?></li>
                        <li><?= $lang['adr-austria-page']['benefits']['li2'] ?></li>
                        <li><?= $lang['adr-austria-page']['benefits']['li3'] ?></li>
                    </ul>
                </section>

                <section>
                    <h2><?= $lang['adr-austria-page']['prices']['h2'] ?></h2>
                    <table>
                        <thead>
                            <tr>
                                <th><?= $lang['adr-austria-page']['prices']['th1'] ?></th>
                                <th><?= $lang['adr-austria-page']['prices']['th2'] ?></th>
                            </tr>
                        </thead>
                        <tbody class="price">
                            <tr>
                                <td><?= $lang['adr-austria-page']['prices']['row1']['name'] ?></td>
                                <td><?= $lang['adr-austria-page']['prices']['row1']['price'] ?></td>
                            </tr>
                            <tr>
                                <td><?= $lang['adr-austria-page']['prices']['row2']['name'] ?></td>
                                <td><?= $lang['adr-austria-page']['prices']['row2']['price'] ?></td>
                            </tr>
                            <tr>
                                <td><?= $lang['adr-austria-page']['prices']['row3']['name'] ?></td>
                                <td><?= $lang['adr-austria-page']['prices']['row3']['price'] ?></td>
                            </tr>
                            <tr>
                                <td><?= $lang['adr-austria-page']['prices']['row4']['name'] ?></td>
                                <td><?= $lang['adr-austria-page']['prices']['row4']['price'] ?></td>
                            </tr>
                            <tr>
                                <td><?= $lang['adr-austria-page']['prices']['row5']['name'] ?></td>
                                <td><?= $lang['adr-austria-page']['prices']['row5']['price'] ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <a class="main-button" href="pdf/RDR_Tanfolyami díjak_Ausztria_2024_szeptembertől.pdf" target="_blank">
                        <?= $lang['adr-austria-page']['prices']['pdf'] ?>
                    </a>
                </section>

                <section>
                    <h2><?= $lang['adr-austria-page']['accommodation']['h2'] ?></h2>
                    <p><strong><?= $lang['adr-austria-page']['accommodation']['place'] ?></strong> – <?= $lang['adr-austria-page']['accommodation']['with_breakfast'] ?></p>
                    <ul>
                        <li><?= $lang['adr-austria-page']['accommodation']['li1'] ?></li>
                        <li><?= $lang['adr-austria-page']['accommodation']['li2'] ?></li>
                        <li><?= $lang['adr-austria-page']['accommodation']['li3'] ?></li>
                    </ul>
                    <p class="highlight"><?= $lang['adr-austria-page']['accommodation']['note'] ?></p>
                </section>

                <section>
                    <h2><?= $lang['adr-austria-page']['contact']['h2'] ?></h2>
                    <p><?= $lang['adr-austria-page']['contact']['p'] ?></p>
                    <a href="<?= navLink() ?>#contact"><?= $lang['adr-austria-page']['contact']['link'] ?></a>
                </section>

                <?php include "include/course-application-form.php"; ?>
            </div>
        </div>
    </div>



    <?php include "include/footer.php"; ?>
</body>

</html>