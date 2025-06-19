<?php
// Automatikusan meghatározza az URL-t (pl. http://localhost/RDR2003 vagy https://domain.hu)
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
$host = $_SERVER['HTTP_HOST'];
$path = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');

define('BASE_URL', $protocol . '://' . $host . $path);

// config.php
// Konfigurációs fájl

// Nyelvi beállítások
$availableLangs = ['de','en','hu', 'vn']; // <<< IDE ADD HOZZÁ AZ ÚJ NYELVEKET
$defaultLang = 'hu'; // Az alapértelmezett nyelv
$fallbackLang = 'en'; // A visszaeső nyelv, ha valami hiba van

// Ezek a változók a 'config.php' betöltése után globálisan elérhetőek lesznek.
// A 'config_lang.php' fájl is használni fogja őket.