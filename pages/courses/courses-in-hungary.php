<!DOCTYPE html>
<html lang="hu">

<head>
    <?php include "include/head.php"; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magyarorszagi Tanfolyamok | RDR2003</title>
    <link rel="stylesheet" href="css/magyarorszagi-tanfolyamok.css">
</head>

<body>
    <?php include "include/navigationbar.php"; ?>


    <div class="container hu-courses">
        <h1 class="text-center">Magyarországi Tanfolyamok</h1>
        <div class="row g-3">
            <div class="col-lg-6 col-sm-12">
                <div>
                    <a href="<?= BASE_URL . $routes['magyarOGki']['path'] ?>">
                        <div class="course">
                            <img src="imgs/pexels-eduardo199o9-178988127-17824889.jpg" alt="">
                            <h3 class="mt-3">GKI Tanfolyam</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div>
                    <a href="<?= BASE_URL . $routes['szakmaiIranyito']['path'] ?>">
                        <div class="course">
                            <img src="imgs/pexels-quintingellar-2199293.jpg" alt="">
                            <h3 class="mt-3">Szakmai Irányító</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>