<?php
// config_lang.php

// A $availableLangs, $defaultLang és $fallbackLang már definiálva van
// a config.php által, amit az index.php már betöltött.
// NEM KELL ÚJRA DEFINIÁLNI ITT:
// $availableLangs = ['hu', 'en', 'vn', 'de'];
// $defaultLang = 'hu';
// $fallbackLang = 'en';

// Hozzáadás a $GLOBALS-hoz, hogy máshol is elérhető legyen
// (bár már globálisak, így a $GLOBALS['availableLangs'] is ugyanazt fogja mutatni)
$GLOBALS['availableLangs'] = $availableLangs;

function detectBrowserLanguage($availableLangs, $default, $fallback) {
    if (!isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) return $default;
    foreach (explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE']) as $lang) {
        $code = substr($lang, 0, 2);
        if (in_array($code, $availableLangs)) return $code;
    }
    return $fallback;
}

$currentLang = $_GET['lang'] ?? detectBrowserLanguage($availableLangs, $defaultLang, $fallbackLang);

// Nyelvi fájl betöltése
$langFile = __DIR__ . '/langs/' . $currentLang . '.php';
if (file_exists($langFile)) {
    $lang = require $langFile;
} else {
    $lang = require __DIR__ . '/langs/' . $fallbackLang . '.php';
}

// Hozzáadás a $GLOBALS-hoz
$GLOBALS['lang'] = $lang;
$GLOBALS['currentLang'] = $currentLang;
?>