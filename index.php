<?php
// index.php

require_once __DIR__ . '/config.php'; // <<< EZ MOST MÁR BETÖLTI A $availableLangs, $defaultLang, $fallbackLang VÁLTOZÓKAT

// A routes.php fájlban NE legyen require_once 'config_lang.php';
$routes = require __DIR__ . '/routes.php';

// Lekéri az aktuális URI-t (pl. /langtest/hu/about)
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);



// Meghatározza az alapprojekt elérési utat (pl. /langtest)
$basePath = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');
$GLOBALS['basePath'] = $basePath; // Hozzáadás a GLOBALS-hoz

// Kivonja az útvonalból az alappath-t (pl. /hu/about)
if (strpos($requestUri, $basePath) === 0) {
    $routePath = substr($requestUri, strlen($basePath));
} else {
    $routePath = $requestUri;
}

// Nyelv kinyerése az útvonalból (pl. /hu/home -> 'hu')
$pathSegments = explode('/', trim($routePath, '/'));
$extractedLang = $pathSegments[0] ?? null;

// Töröljük a $_GET['lang']-et, hogy ne zavarja be az előző kérések értéke
unset($_GET['lang']);

// Most már közvetlenül használhatjuk az $availableLangs-t,
// mivel a config.php már betöltötte.
// Ezt a sort ELTÁVOLÍTOTTUK: $knownAvailableLangs = ['hu', 'en'];

if ($extractedLang && in_array($extractedLang, $availableLangs)) { // <<< ITT HASZNÁLJUK AZ $availableLangs-t
    $_GET['lang'] = $extractedLang; // Beállítjuk a $_GET['lang']-et az URL alapján
    array_shift($pathSegments); // Eltávolítjuk a nyelvi szegmenst az útvonalból
    $routePath = '/' . implode('/', $pathSegments);
    if ($routePath === '/') { // Kezeli az esetet, ha csak a nyelvi szegmens volt az URL-ben (pl. /langtest/en)
        $routePath = '/home'; // Alapértelmezettként a /home oldalra irányítja
    }
} else {
    // Ha az URL-ben nincs nyelvkód, vagy érvénytelen, akkor a $_GET['lang'] nem lesz beállítva.
    // Ekkor a config_lang.php fogja detektálni a böngésző nyelvét vagy az alapértelmezettet.
}

// MOST ÉS CSAK MOST töltjük be a config_lang.php fájlt.
// Ez biztosítja, hogy a config_lang.php a $_GET['lang'] helyes értékével fusson le.
require_once __DIR__ . '/config_lang.php';


// Linkek létrehozása
function navLink($path = '') {
    $lang = $_GET['lang'] ?? 'hu';
    return BASE_URL . '/' . $lang . '/' . ltrim($path, '/');
}



// Meghatározza az aktuális oldal slugját (pl. 'home', 'about', 'contact')
// Miután a routePath feldolgozásra került és `/home`, `/about` stb. lett
$currentPageSlug = trim($routePath, '/');
$GLOBALS['currentPageSlug'] = $currentPageSlug; // Hozzáadás a GLOBALS-hoz

// Ha a gyökérre érkezett a látogató (pl. csak /), akkor átirányítjuk az alapértelmezett nyelvi oldalra
if ($routePath === '/' || $routePath === '') {
    $redirectPath = $basePath . '/' . $GLOBALS['currentLang'] . '/';
    header("Location: " . $redirectPath);
    exit;
}

// Ellenőrzi, hogy az útvonal szerepel-e a route-ok között
if (isset($routes[$routePath])) {
    require __DIR__ . '/' . $routes[$routePath];
} else {
    // 404-es hiba, ha nincs ilyen oldal
    http_response_code(404);
    require __DIR__ . '/pages/404.php';
}


?>