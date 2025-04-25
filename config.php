<?php
// Automatikusan meghatározza az URL-t (pl. http://localhost/RDR2003 vagy https://domain.hu)
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
$host = $_SERVER['HTTP_HOST'];
$path = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');

define('BASE_URL', $protocol . '://' . $host . $path);
