<?php error_reporting(0); ?>
<?php require_once 'config.php';
$routes = require 'routes.php'; ?>
<?php
$currentPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$basePath = parse_url(BASE_URL, PHP_URL_PATH) ?? '';
if (!empty($basePath) && str_starts_with($currentPath, $basePath)) {
  $currentPath = substr($currentPath, strlen($basePath));
}

$isHomepage = preg_match('#^/(' . implode('|', $availableLangs) . ')(/home|/index\.php)?/?$#', $currentPath) || $currentPath === '';
?>

<?php include "cookie_notice.php"; ?>
<link rel="stylesheet" href="<?= BASE_URL ?>/css/navigationbar.css">
<nav class="navbar <?php echo $isHomepage ? 'navbar-index' : 'navbar-default'; ?>">
  <div class="content">
    <div class="logo">
      <a href="./">
        <img src="<?php echo BASE_URL ?>/imgs/logo.png" alt="Logo" class="logo-img-1">
        <img src="<?php echo BASE_URL ?>/imgs/logo.png" alt="" class="logo-img-2">

      </a>
    </div>
    <ul class="menu-list">
      <div class="icon cancel-btn">
        <i class="fas fa-times"></i>
      </div>
      <li><a href="<?= navLink() ?>" class="nav-a-black"><?= $lang['navbar']['home'] ?></a></li>
      <li><a href="<?= navLink() ?>#courses" class="nav-a-black" data-i18n="navbar.training"><?= $lang['navbar']['courses'] ?></a></li>
      <li><a href="<?= navLink('advice') ?>" class="nav-a-black" data-i18n="navbar.counseling"><?= $lang['navbar']['advice'] ?></a></li>
      <li><a href="<?= navLink('rent') ?>" class="nav-a-black" data-i18n="navbar.rental"><?= $lang['navbar']['rent'] ?></a></li>
      <li><a href="<?= navLink() ?>#contact" class="nav-a-black" data-i18n="navbar.contact"><?= $lang['navbar']['contact'] ?></a></li>
      <li><a href="https://www.facebook.com/rdr2003.hu" class="nav-a-black" target="_blank"><i class="fa fa-facebook"></i></a></li>
      <li><a href="mailto:rdr2003@rdr2003.hu" class="nav-a-black"><i class="fas fa-envelope"></i></a></li>
      <li>
        <?php

        $uri = $_SERVER['REQUEST_URI'];
        $uriParts = explode('/', trim($uri, '/'));
        $langIndex = null;
        foreach ($uriParts as $index => $part) {
          if (in_array($part, $availableLangs)) {
            $l = $part;
            $langIndex = $index;
            break;
          }
        }

        // Ha megtaláltuk, akkor vegyük a nyelv utáni részeket
        $routeParts = [];
        if (!is_null($langIndex)) {
          $routeParts = array_slice($uriParts, $langIndex + 1);
        }

        // Például így kapsz egy route stringet:
        $routePath = implode('/', $routeParts);


        ?>
        <select name="" id="languageSwitcher" onchange="navigateToLink(this)">
          <?php
          foreach ($availableLangs as $value) {
          ?>
            <option value="<?= BASE_URL . '/' . $value . '/' . $routePath?>" <?= ($value == $currentLang) ? 'selected' : '' ?>><?= $value ?></a></option>

            <!-- <option value=""><?= BASE_URL . '/' . $value . '/' . $routePath?></option> -->
          <?php
          }
          ?>
        </select>
      </li>
    </ul>
    <div class="icon menu-btn">
      <i class="fas fa-bars"></i>
    </div>
  </div>
</nav>
<link rel="stylesheet" href="css/print-page.css" media="print">

<script src="js/navigationbar.js"></script>
<script>
  function navigateToLink(selectElement) {
    const url = selectElement.value;
    if (url) {
      window.location.href = url; // új lapon: window.open(url, '_blank');
    }
  }
</script>
