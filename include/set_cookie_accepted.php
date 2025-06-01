<?php
require_once 'cookie_handler.php';

// Cookie beállítása 1 éves lejárattal
setCookieValue('cookie_accepted', 'true', 365);

// JSON válasz küldése
header('Content-Type: application/json');
echo json_encode(['success' => true]);
?>
