<!DOCTYPE html>
<html lang="hu">

<head>
    <?php include "include/head.php"; ?>
    <title><?= $lang['employees']['title']; ?> | RDR2003</title>
    <link rel="stylesheet" href="css/colleagues.css">
</head>

<body>
    <?php include "include/navigationbar.php"; ?>

    <div class="container">
        <div class="employees">
            <h2><?= $lang['employees']['title'] ?></h2>
            <div class="row g-4">
                <?php foreach ($lang['employees']['list'] as $employee): ?>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="employee-card">
                            <img src="<?= $employee['img'] ?>" alt="<?= $employee['alt'] ?>">
                            <div>
                                <span><?= $employee['name'] ?></span><br>
                                <?php if (!empty($employee['email'])): ?>
                                    <span><?= $employee['email'] ?></span><br>
                                <?php endif; ?>
                                <span><?= $employee['position'] ?></span><br>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>


    <?php include "include/footer.php"; ?>
</body>

</html>