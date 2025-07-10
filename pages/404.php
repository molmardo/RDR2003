<!DOCTYPE html>
<html lang="hu">

<head>
    <?php include "include/head.php"; ?>
    <title>404</title>

</head>

<body>
    <?php include "include/navigationbar.php"; ?>
    <br><br><br><br><br><br>
    <style>
        h2 {
            margin-top: 200px;
            text-align: center;
            color: red;
            font-size:9rem !important;
        }

        h3{
            text-align: center;
            font-size: 2.5rem;
        }
    </style>
    <h2>
        <?= $lang['404']['title'] ?><br>
    </h2>
    <h3>
        <?= $lang['404']['line1'] ?><br>
        <?= $lang['404']['line2'] ?>

    </h3>
</body>

</html>