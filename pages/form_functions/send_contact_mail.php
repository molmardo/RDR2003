<?php
header("Content-Type: text/plain");

function isValidEmail($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $phone = trim($_POST["phone"] ?? "");
    $message = trim($_POST["message"] ?? "");

    if ($name === "" || $email === "" || $message === "") {
        http_response_code(400);
        echo "Kérlek, tölts ki minden kötelező mezőt!";
        exit;
    }

    if (!isValidEmail($email)) {
        http_response_code(400);
        echo "Hibás email cím.";
        exit;
    }

    $to = "molnarmark2005@gmail.com"; // cseréld le a saját címedre
    $subject = "Kapcsolati űrlap - RDR2003";
    $body = "Név: $name\nEmail: $email\nTelefon: $phone\n\nÜzenet:\n$message";
    $headers = "From: noreply@domain.hu";

    if (mail($to, $subject, $body, $headers)) {
        // echo "Adatok" . $subject . " " . $body;
        $userBody =
            "Kedves $name!
        
    Köszönjük, hogy kapcsolatba lépett velünk! 
    Üzenetét sikeresen megkaptuk, és hamarosan válaszolni fogunk Önnek.

    Az Ön által megadott adatok:
    Név: $name
    Email: $email
    Telefonszám: $phone
    Üzenet:
    $message

    Kérjük, ne válaszoljon erre az automatikus üzenetre.

    Üdvözlettel:
    RDR2003
        ";
        mail($email, $subject, $userBody, $headers);
        echo "Sikeresen elküldtük az üzeneted!";
    } else {
        http_response_code(500);
        echo "Hiba történt az email küldésekor.";
    }
} else {
    http_response_code(405);
    echo "Érvénytelen kérés.";
}
