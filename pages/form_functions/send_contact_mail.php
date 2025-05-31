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

    $to = "molnar.mark@weboldal-gyorsan.hu"; // cseréld le a saját címedre
    $subject = "Kapcsolati űrlap - RDR2003";
    $body = "
<html>
<head>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      padding: 20px;
    }
    .email-wrapper {
      max-width: 600px;
      margin: auto;
      background-color: #ffffff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
      color: #333;
    }
    .field {
      margin-bottom: 15px;
    }
    .field strong {
      color: #fe9901;
      display: inline-block;
      width: 90px;
    }
    .message {
      background-color: #f9f9f9;
      padding: 15px;
      border-left: 4px solid #fe9901;
      white-space: pre-line;
      border-radius: 5px;
    }
  </style>
</head>
<body>
  <div class='email-wrapper'>
    <div class='field'><strong>Név:</strong> $name</div>
    <div class='field'><strong>Email:</strong> $email</div>
    <div class='field'><strong>Telefon:</strong> $phone</div>
    <div class='field'><strong>Üzenet:</strong></div>
    <div class='message'>" . nl2br(htmlspecialchars($message)) . "</div>
  </div>
</body>
</html>
";
    $headers = 'Content-type: text/html; charset=UTF-8' . "\r\n";
    $headers .= "From: RDR2003 noreply@domain.hu";

    if (mail($to, $subject, $body, $headers)) {
        // echo "Adatok" . $subject . " " . $body;

        $userBody =
            "
<html>
<head>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      padding: 20px;
    }
    .email-container {
      max-width: 600px;
      margin: 0 auto;
      background-color: #ffffff;
      border-radius: 10px;
      padding: 30px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .logo {
      text-align: center;
      margin-bottom: 20px;
    }
    .logo img {
      max-height: 80px;
    }
    .content h2 {
      color: #333;
    }
    .data {
      background-color: #f9f9f9;
      border-left: 5px solid #fe9901;
      padding: 10px 15px;
      margin-top: 10px;
      font-size: 15px;
    }
    .footer {
      margin-top: 30px;
      font-size: 13px;
      color: #888;
      text-align: center;
    }
  </style>
</head>
<body>
  <div class='email-container'>
    <div class='logo'>
      <img src='https://rdr2003.weboldal-gyorsan.hu/imgs/logo.png' alt='Cég logója'>
    </div>
    <div class='content'>
        <h1>Kedves $name!</h1>
      <h2>Köszönjük, hogy kapcsolatba lépett velünk!</h2>
      <p>Üzenetét sikeresen megkaptuk, és hamarosan válaszolni fogunk Önnek.</p>

      <h3>Megadott adatok:</h3>
      <div class='data'>
        <strong>Email:</strong> $email<br>
        <strong>Telefonszám:</strong> $phone<br>
        <strong>Üzenet:</strong><br>" . nl2br(htmlspecialchars($message)) . "<br>
      </div>

      <div class='footer'>
        Kérjük, ne válaszoljon erre az automatikus üzenetre.
      </div>
    </div>
  </div>
</body>
</html>
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
