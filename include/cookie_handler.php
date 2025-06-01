<?php
/**
 * Cookie kezelő függvények
 */

// Cookie beállítása
function setCookieValue($name, $value, $expiry = 30) {
    $expiration = time() + ($expiry * 24 * 60 * 60); // Alapértelmezett lejárat: 30 nap
    setcookie($name, $value, $expiration, '/');
}

// Cookie értékének lekérése
function getCookieValue($name) {
    return isset($_COOKIE[$name]) ? $_COOKIE[$name] : null;
}

// Cookie törlése
function deleteCookie($name) {
    if (isset($_COOKIE[$name])) {
        setcookie($name, '', time() - 3600, '/');
        unset($_COOKIE[$name]);
    }
}

// Cookie létezésének ellenőrzése
function cookieExists($name) {
    return isset($_COOKIE[$name]);
}

// Összes cookie törlése
function deleteAllCookies() {
    if (isset($_SERVER['HTTP_COOKIE'])) {
        $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
        foreach($cookies as $cookie) {
            $parts = explode('=', $cookie);
            $name = trim($parts[0]);
            setcookie($name, '', time() - 3600, '/');
            unset($_COOKIE[$name]);
        }
    }
}
?>
