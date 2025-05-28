<?php
session_start();  // Session indítása

$helyes_jelszo = "titok123";  // A helyes jelszó

// Ha a felhasználó még nincs bejelentkezve, kérj tőle jelszót
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    if (isset($_POST['password'])) {
        // Ha a jelszó helyes, indítsuk a session-t
        if ($_POST['password'] === $helyes_jelszo) {
            $_SESSION['logged_in'] = true;
        } else {
            echo "<script>alert('Hibás jelszó!');</script>";
        }
    }

    // Ha a felhasználó nincs bejelentkezve, jelenítse meg a jelszó kérését
    if (!isset($_SESSION['logged_in'])) {
        echo "<form method='post'>
                <label>Jelszó: <input type='password' name='password'></label>
                <input type='submit' value='Bejelentkezés'>
              </form>";
        exit();
    }
}

$phone_numbers = file('data/phone_numbers.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

?>



<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/6416005539.js" crossorigin="anonymous"></script>
    <!-- Robots Meta Tags -->
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- Open Graph Meta Tags for Social Media -->
    <!-- Twitter Card Meta Tags -->
    <!-- Additional SEO Meta Tags -->
    <meta name="language" content="Hungarian">
    <meta name="revisit-after" content="7 days">
    <!-- <meta name="theme-color" content="#fe9901"> -->
    <meta name="theme-color" content="#000">
    <!-- Canonical URL -->

