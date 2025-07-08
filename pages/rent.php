<!DOCTYPE html>
<html lang="hu">

<head>
    <?php include "include/head.php"; ?>
    <title><?= $lang['rent-page']['title']?> | RDR2003</title>
    <link rel="stylesheet" href="css/rentals.css">
</head>

<body>
    <?php include "include/navigationbar.php"; ?>
    <!-- 
        Leírás (Lorem),
        Időpontokért 
    -->
    <div class="container rental-full">
        <h2 class="text-center mb-4"><?= $lang['rent-page']['title']?></h2>
        <div class="row g-3">
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex align-items-stretch">
                <a href="<?= navLink('/rent/van') ?>" class="w-100">
                    <div class="rental h-100">
                        <img src="imgs/szemelyszallito_furgonok.jpg" alt="<?= $lang['rent-page']['card1']['h3']?> img" class="img-fluid">
                        <h3 class="mt-3"><?= $lang['rent-page']['card1']['h3']?></h3>
                        <p><?= $lang['rent-page']['card1']['p']?></p>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex align-items-stretch">
                <a href="<?= navLink('/rent/classroom')?>" class="w-100">
                    <div class="rental h-100">
                        <img src="imgs/tanterem.jpg" alt="<?= $lang['rent-page']['card2']['h3']?> img" class="img-fluid">
                        <h3 class="mt-3"><?= $lang['rent-page']['card2']['h3']?></h3>
                        <p><?= $lang['rent-page']['card2']['p']?></p>
                    </div>
                </a>
            </div>
        </div>
    </div>


    <?php // include "include/footer.php";
    ?>
</body>

</html>