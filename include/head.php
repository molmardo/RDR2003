<?php
$phone_numbers = file('data/phone_numbers.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
?>
<?php
$fullBase = $protocol . '://' . $host . $basePath . '/';
echo '<base href="' . $fullBase . '">' . PHP_EOL;
$uri = $_SERVER['REQUEST_URI'];
$host = $_SERVER['HTTP_HOST'];
$fullUrl = $protocol . $host . $uri;
?>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
<script src="js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/6416005539.js" crossorigin="anonymous"></script>
<!-- Essential Meta Tags -->
<meta name="description" content="<?= $lang['metatags']['description'] ?>">
<meta name="keywords" content="<?= $lang['metatags']['keywords'] ?>">
<meta name="author" content="RDR2003">
<!-- Robots Meta Tags -->
<meta name="robots" content="index, follow">
<meta name="googlebot" content="index, follow">
<!-- Favicon -->
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<!-- Open Graph Meta Tags for Social Media -->
<meta property="og:type" content="website">
<meta property="og:title" content="<?= $lang['metatags']['og-title'] ?>">
<meta property="og:description" content="<?= $lang['metatags']['og-description'] ?>">
<meta property="og:url" content="<?= BASE_URL . $_SERVER['REQUEST_URI'] ?>">
<meta property="og:site_name" content="RDR 2003 Kft">
<meta property="og:image" content="<?= BASE_URL . '/imgs/social-preview.jpg' ?>">
<!-- Twitter Card Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= $lang['metatags']['og-title'] ?>">
<meta name="twitter:description" content="<?= $lang['metatags']['og-description'] ?>">
<meta name="twitter:image" content="<?= BASE_URL . '/imgs/social-preview.jpg' ?>">
<meta name="twitter:site" content="@rdr2003">
<!-- Additional SEO Meta Tags -->
<meta name="language" content="Hungarian">
<meta name="revisit-after" content="7 days">
<meta name="theme-color" content="#000">
<!-- Canonical URL -->
<link rel="canonical" href="<?= $host ?>">
<link rel="alternate" href="<?= $fullUrl ?>" hreflang="<?= $currentLang ?>" />