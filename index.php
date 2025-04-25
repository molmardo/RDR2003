<?php
require_once __DIR__ . '/config.php';
$routes = require __DIR__ . '/routes.php';

// Lekérdezzük az URI-t
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$basePath = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');
$routePath = str_replace($basePath, '', $requestUri);
if ($routePath === '') $routePath = '/';

// Megkeressük a fájlnevet az URL alapján
$pageFound = false;
foreach ($routes as $route) {
    if ($route['path'] === $routePath) {
        require __DIR__ . '/pages/' . $route['file'];
        $pageFound = true;
        break;
    }
}

if (!$pageFound) {
    http_response_code(404);
    require __DIR__ . '/pages/404.php';
}
