<!DOCTYPE html>
<html lang="hu">

<head>
    <?php include "include/head.php"; ?>
    <title>Szakmai Irányító | RDR2003</title>
    <link rel="stylesheet" href="css/tanfolyamok-css.css">
</head>

<body>
    <?php include "include/navigationbar.php"; ?>

    <div class="container">
        <div class="adr">
            <img src="imgs/pexels-quintingellar-2199293.jpg" alt="<?= $lang['av-page']['title'] ?>" class="header-img">
            <div class="adr-data">
                <h1 class="text-center"><?= $lang['av-page']['title'] ?></h1>

                <section>
                    <h2><?= $lang['av-page']['fees']['h2'] ?></h2>
                    <table>
                        <thead>
                            <tr>
                                <th><?= $lang['av-page']['fees']['th1'] ?></th>
                                <th><?= $lang['av-page']['fees']['th2'] ?></th>
                            </tr>
                        </thead>
                        <tbody class="price">
                            <tr>
                                <td><?= $lang['av-page']['fees']['row1']['name'] ?></td>
                                <td><?= $lang['av-page']['fees']['row1']['price'] ?></td>
                            </tr>
                            <tr>
                                <td><?= $lang['av-page']['fees']['row2']['name'] ?></td>
                                <td><?= $lang['av-page']['fees']['row2']['price'] ?></td>
                            </tr>
                            <tr>
                                <td><?= $lang['av-page']['fees']['row3']['name'] ?></td>
                                <td><?= $lang['av-page']['fees']['row3']['price'] ?></td>
                            </tr>
                            <tr>
                                <td><?= $lang['av-page']['fees']['row4']['name'] ?></td>
                                <td><?= $lang['av-page']['fees']['row4']['price'] ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="highlight">
                        <p><em><?= $lang['av-page']['fees']['valid_from'] ?></em></p>
                    </div>
                </section>

                <section>
                    <h2><?= $lang['av-page']['format']['h2'] ?></h2>
                    <p><?= $lang['av-page']['format']['p'] ?></p>
                    <ul>
                        <li><?= $lang['av-page']['format']['li1'] ?></li>
                        <li><?= $lang['av-page']['format']['li2'] ?></li>
                    </ul>
                </section>

                <section>
                    <h2><?= $lang['av-page']['consultation']['h2'] ?></h2>
                    <p><?= $lang['av-page']['consultation']['p'] ?></p>
                    <ul>
                        <li><?= $lang['av-page']['consultation']['li1'] ?></li>
                        <li><?= $lang['av-page']['consultation']['li2'] ?></li>
                    </ul>
                </section>

                <section>
                    <h2><?= $lang['av-page']['exam']['h2'] ?></h2>
                    <p><?= $lang['av-page']['exam']['p'] ?></p>
                    <ul>
                        <li><strong><?= $lang['av-page']['exam']['li1_label'] ?></strong> <?= $lang['av-page']['exam']['li1'] ?></li>
                        <li><strong><?= $lang['av-page']['exam']['li2_label'] ?></strong> <?= $lang['av-page']['exam']['li2'] ?></li>
                    </ul>
                    <div class="highlight">
                        <p><strong><?= $lang['av-page']['exam']['note_label'] ?></strong> <?= $lang['av-page']['exam']['note'] ?></p>
                    </div>
                </section>

                <section>
                    <h2><?= $lang['av-page']['documents']['h2'] ?></h2>
                    <ul>
                        <li><?= $lang['av-page']['documents']['li1'] ?></li>
                        <li><?= $lang['av-page']['documents']['li2'] ?></li>
                        <li><?= $lang['av-page']['documents']['li3'] ?></li>
                    </ul>
                    <div class="highlight">
                        <p><strong><?= $lang['av-page']['documents']['note_label'] ?></strong> <?= $lang['av-page']['documents']['note'] ?></p>
                    </div>
                </section>

                <section>
                    <h2><?= $lang['av-page']['registration']['h2'] ?></h2>
                    <ul>
                        <li><?= $lang['av-page']['registration']['li1'] ?></li>
                        <li><?= $lang['av-page']['registration']['li2'] ?></li>
                        <li><?= $lang['av-page']['registration']['li3'] ?></li>
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