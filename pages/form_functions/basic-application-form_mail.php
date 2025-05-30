<?php
header("Content-Type: text/plain");

function validate($value)
{
    return htmlspecialchars(trim($value));
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $vezeteknev = validate($_POST['vezeteknev'] ?? '');
    $keresztnev = validate($_POST['keresztnev'] ?? '');
    $keresztnev2 = validate($_POST['keresztnev2'] ?? '');
    $cegnev = validate($_POST['cegnev'] ?? '');
    $email = validate($_POST['email'] ?? '');
    $telefon = validate($_POST['telefon'] ?? '');
    $uzenet = validate($_POST['uzenet'] ?? '');

    if (!$vezeteknev || !$keresztnev || !$email || !$telefon || !$uzenet) {
        http_response_code(400);
        echo "Minden mezőt ki kell tölteni!";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo "Hibás email formátum.";
        exit;
    }

    $to = "molnarmark2005@gmail.com";
    $subject = "Új jelentkezés a weboldalon";
    $body = "Név: $vezeteknev $keresztnev $keresztnev2\nCégnév: $cegnev\nEmail: $email\nTelefon: $telefon\nÜzenet:\n$uzenet";
    $headers = "From: molnarmark2005@gmail.com";

    // Felhasználónak automatikus visszajelzés (opcionális)
    $userBody = "Kedves $keresztnev!\n\nKöszönjük jelentkezését. Hamarosan felvesszük Önnel a kapcsolatot.\n\nÜdvözlettel,\nA csapat";
    @mail($email, "Visszaigazolás", $userBody, $headers);

    if (mail($to, $subject, $body, $headers)) {
        mail($to, $subject, $body, $headers);
        echo "Köszönjük, az űrlapot sikeresen elküldtük!";
    } else {
        http_response_code(500);
        echo "Hiba történt az elküldés során.";
    }
} else {
    http_response_code(405);
    echo "Érvénytelen kérés.";
}
