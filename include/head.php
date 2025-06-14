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
        ?>
        <!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Belépés - Zárt oldal</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <style>
    @import url(css/default.css);
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: 'Inter', sans-serif;
      background: linear-gradient(135deg, var(--main-hover-dark), var(--main-hover));
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login-container {
      background-color: #fff;
      padding: 2rem;
      border-radius: 1rem;
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
      max-width: 400px;
      width: 100%;
      text-align: center;
    }

    .login-container img.logo {
      max-width: 120px;
      margin-bottom: 1rem;
    }

    h2 {
      margin-bottom: 1rem;
      color: #333;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 1rem;
    }

    input[type="password"] {
      padding: 0.75rem;
      font-size: 1rem;
      border: 1px solid #ccc;
      border-radius: 0.5rem;
    }

    input[type="submit"] {
      padding: 0.75rem;
      font-size: 1rem;
      background-color: var(--main);
      color: white;
      border: none;
      border-radius: 0.5rem;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
      background-color: var(--main-hover);
    }

    @media (max-width: 500px) {
      .login-container {
        padding: 1.5rem;
      }
    }
  </style>
</head>
<body>
  <div class="login-container">
    <img src="imgs/logo.png" alt="Logó" class="logo">
    <h2>Belépés</h2>
    <form method="post">
      <input type="password" name="password" placeholder="Jelszó" required>
      <input type="submit" value="Bejelentkezés">
    </form>
  </div>
</body>
</html>

        <?php
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

