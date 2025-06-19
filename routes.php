<?php
// routes.php

// Győződj meg róla, hogy NINCS ilyen sor itt:
// require_once __DIR__ . '/config_lang.php';

$baseRoutes = [
    '/home' => 'pages/home.php',
    '/our-colleagues' => 'pages/our-colleagues.php',
    '/our-colleagues' => 'pages/our-colleagues.php',
    '/rent' => 'pages/rent.php',
    '/advice' => 'pages/advice.php',
    '/documents/cookie-policy' => 'pages/documents/cookie-policy.php',
    '/documents/impressum' => 'pages/documents/impressum.php',
    '/documents/gdpr' => 'pages/documents/gdpr.php',
    '/documents/privacy-policy' => 'pages/documents/privacy-policy.php',
    '/rent/classroom' => 'pages/rent/classroom.php',
    '/rent/van' => 'pages/rent/ven.php',
    '/courses/austrian-adr-course' => 'pages/courses/austrian-adr-course.php',
    '/courses/av-course' => 'pages/courses/av-course.php',
    '/courses/courses-in-hungary' => 'pages/courses/courses-in-hungary.php',
    '/courses/gki-course' => 'pages/courses/gki-course.php',
    '/courses/hungarian-adr-course' => 'pages/courses/hungarian-adr-course.php',
    '/form_functions' => 'pages/form_functions/basic-application-form_mail.php',
    '/form_functions' => 'pages/course-application-form_mail.php',
    '/form_functions' => 'pages/send_contact_mail.php',
    '/home' => 'pages/home.php',
];

// Mivel az index.php már eltávolította a nyelvi előtagot az útvonalból,
// egyszerűen ezeket az alap útvonalakat használhatjuk.
$routes = $baseRoutes;

// A '/' útvonalat az index.php átirányítása kezeli, így ez a sor sem kell ide.
// Győződj meg róla, hogy NINCS ilyen sor itt:
// $routes['/'] = 'pages/home.php';

return $routes;
