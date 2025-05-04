<?php error_reporting(0); ?>
<?php require_once 'config.php';
$routes = require 'routes.php'; ?>
<?php
$currentPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$basePath = parse_url(BASE_URL, PHP_URL_PATH) ?? '';
if (!empty($basePath) && str_starts_with($currentPath, $basePath)) {
  $currentPath = substr($currentPath, strlen($basePath));
}

$isHomepage = ($currentPath === '/' || $currentPath === '' || $currentPath === '/home' || $currentPath === '/index.php');
?>

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
      <li><a href="<?= BASE_URL . array_search('home.php', $routes) ?>" class="nav-a-black" data-i18n="navbar.home">Kezdőlap</a></li>
      <li><a href="./#tanfolyamok" class="nav-a-black" data-i18n="navbar.training">Tanfolyamok</a></li>
      <li><a href="<?= BASE_URL . $routes['tanacsadas']['path'] ?>" class="nav-a-black" data-i18n="navbar.counseling">Tanácsadás</a></li>
      <li><a href="<?= BASE_URL . $routes['berbeadas']['path'] ?>" class="nav-a-black" data-i18n="navbar.rental">Bérlés</a></li>
      <!-- <li><a href="kapcsolat" class="nav-a-black">Audit</a></li> -->
      <!-- <li><a href="kapcsolat" class="nav-a-black">Bérbeadás</a></li> -->
      <li><a href="./#rolunk" class="nav-a-black" data-i18n="navbar.aboutus">Rólunk</a></li>
      <li><a href="./#kapcsolat" class="nav-a-black" data-i18n="navbar.contact">Kapcsolat</a></li>
      <li><a href="https://www.facebook.com/rdr2003.hu" class="nav-a-black" target="_blank"><i class="fa fa-facebook"></i></a></li>
      <li><a href="mailto:rdr2003@rdr2003.hu" class="nav-a-black"><i class="fas fa-envelope"></i></a></li>
      <li>
        <select id="languageSwitcher" class="" onchange="changeLanguage(this.value)">
        </select>
      </li>
    </ul>
    <div class="icon menu-btn">
      <i class="fas fa-bars"></i>
    </div>
  </div>
</nav>

<script src="js/navigationbar.js"></script>
<script src="js/translation_script.js"></script>
