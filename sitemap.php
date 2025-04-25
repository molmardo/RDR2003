<?php

$routes = include 'routes.php'; 

$baseUrl = 'https://www.teoldalad.hu';

$xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><urlset></urlset>');
$xml->addAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');

foreach ($routes as $route) {
    $url = $xml->addChild('url');
    $url->addChild('loc', htmlspecialchars($baseUrl . $route['path']));
    $url->addChild('changefreq', 'monthly');
    $url->addChild('priority', '0.8');
}

// Mentés fájlba
$xml->asXML('sitemap.xml');

echo "Sitemap generated successfully!";
