<?php
$baseRoutes = [
    // Simple pages
    '/home' => 'pages/home.php',
    '/our-colleagues' => 'pages/our-colleagues.php',
    '/advice' => 'pages/advice.php',
    // Documents
    '/documents/cookie-policy' => 'pages/documents/cookie-policy.php',
    '/documents/impressum' => 'pages/documents/impressum.php',
    '/documents/gdpr' => 'pages/documents/gdpr.php',
    '/documents/privacy-policy' => 'pages/documents/privacy-policy.php',
    // Rent
    '/rent' => 'pages/rent.php',
    '/rent/classroom' => 'pages/rent/classroom.php',
    '/rent/van' => 'pages/rent/van.php',
    // Courses
    '/courses/austrian-adr-course' => 'pages/courses/austrian-adr-course.php',
    '/courses/av-course' => 'pages/courses/av-course.php',
    '/courses/courses-in-hungary' => 'pages/courses/courses-in-hungary.php',
    '/courses/gki-course' => 'pages/courses/gki-course.php',
    '/courses/hungarian-adr-course' => 'pages/courses/hungarian-adr-course.php',
    // Form functions
    '/form_functions/basic-application-form_mail' => 'pages/form_functions/basic-application-form_mail.php',
    '/form_functions/course-application-form_mail' => 'pages/form_functions/course-application-form_mail.php',
    '/form_functions/send_contact_mail' => 'pages/form_functions/send_contact_mail.php',
    '/report' => 'pages/report.php',
    
];

// Mivel az index.php már eltávolította a nyelvi előtagot az útvonalból,
// egyszerűen ezeket az alap útvonalakat használhatjuk.
$routes = $baseRoutes;

// A '/' útvonalat az index.php átirányítása kezeli, így ez a sor sem kell ide.
// Győződj meg róla, hogy NINCS ilyen sor itt:
// $routes['/'] = 'pages/home.php';

return $routes;
