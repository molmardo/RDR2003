<!DOCTYPE html>
<html lang="hu">

<head>
    <?php include "include/head.php"; ?>
    <title>Bérbeadás | RDR2003</title>
    <link rel="stylesheet" href="css/berbeadas.css">
</head>

<body>
    <?php include "include/navigationbar.php"; ?>
    <!-- 
        Leírás (Lorem),
        Időpontokért 
    -->
    <div class="container rental-full">
        <h2 class="text-center mb-4">Bérbeadás</h2>
        <div class="row g-3">
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex align-items-stretch">
                <a href="<?= BASE_URL . $routes['furgon-berles']['path'] ?>" class="w-100">
                    <div class="rental h-100">
                        <img src="imgs/pexels-norma-mortenson-4391475.jpg" alt="" class="img-fluid">
                        <h3 class="mt-3">Személyszállító furgon bérlés</h3>
                        <p>Tágas, kényelmes személyszállító furgon 6-9 fő részére, ideális csapatutazásokhoz vagy rendezvényekhez – nem teherszállításra, hanem utazásra tervezve.</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex align-items-stretch">
                <a href="<?= BASE_URL . $routes['tanterem-berles']['path'] ?>" class="w-100">
                    <div class="rental h-100">
                        <img src="imgs/pexels-pixabay-159213.jpg" alt="" class="img-fluid">
                        <h3 class="mt-3">Tanterem bérlés</h3>
                        <p>Két klimatizált, jól felszerelt tanterem bérelhető tréningekhez, workshopokhoz vagy kisebb rendezvényekhez, modern technikával, cateringgel és kiváló megközelíthetőséggel.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>


    <?php // include "include/footer.php";
    ?>
</body>

</html>