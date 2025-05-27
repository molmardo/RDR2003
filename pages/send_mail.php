<?php
header("Content-Type: text/plain");

function isValidEmail($email) {
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

    $to = "te@domain.hu"; // cseréld le a saját címedre
    $subject = "Kapcsolati űrlap – új üzenet";
    $body = "Név: $name\nEmail: $email\nTelefon: $phone\n\nÜzenet:\n$message";
    $headers = "From: noreply@domain.hu";

    if (mail($to, $subject, $body, $headers)) {
        echo "Sikeresen elküldtük az üzeneted!";
    } else {
        http_response_code(500);
        echo "Hiba történt az email küldésekor.";
    }
} else {
    http_response_code(405);
    echo "Érvénytelen kérés.";
}
?>
