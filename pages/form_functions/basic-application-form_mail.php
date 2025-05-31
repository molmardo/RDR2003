<?php
header("Content-Type: text/plain");

function validate($value)
{
    return htmlspecialchars(trim($value));
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $source_page = $_POST['source_page'];
    $vezeteknev = validate($_POST['vezeteknev'] ?? '');
    $keresztnev = validate($_POST['keresztnev'] ?? '');
    $keresztnev2 = validate($_POST['keresztnev2'] ?? '');
    $cegnev = validate($_POST['cegnev'] ?? '');
    $email = validate($_POST['email'] ?? '');
    $telefon = validate($_POST['telefon'] ?? '');
    $uzenet = validate($_POST['uzenet'] ?? '');

    if (!$vezeteknev || !$keresztnev || !$email || !$telefon || !$uzenet) {
        http_response_code(400);
        echo "Minden kötelező mezőt ki kell tölteni!";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo "Hibás email formátum.";
        exit;
    }

    $to = "molnar.mark@weboldal-gyorsan.hu";
    $subject = "Új jelentkezés a weboldalon";
    $headers = 'Content-type: text/html; charset=UTF-8' . "\r\n";
    $headers .= "From: RDR2003 molnar.mark@weboldal-gyorsan.hu";
    $body = "
<html>
<head>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f9f9f9;
      padding: 20px;
    }
    .container {
      max-width: 600px;
      background-color: #ffffff;
      padding: 25px 30px;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.08);
      margin: auto;
      color: #333;
    }
    .section-title {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 10px;
      color: #fe9901;
    }
    .data-row {
      margin-bottom: 12px;
    }
    .data-row strong {
      display: inline-block;
      width: 100px;
      color: #555;
    }
    .footer-note {
      margin-top: 25px;
      font-size: 13px;
      color: #888;
      font-style: italic;
    }
  </style>
</head>
<body>
  <div class='container'>
    <div class='section-title'>Űrlap adatai</div>

    <div class='data-row'><strong>Név:</strong> $vezeteknev $keresztnev $keresztnev2</div>
    <div class='data-row'><strong>Cégnév:</strong> $cegnev</div>
    <div class='data-row'><strong>Email:</strong> $email</div>
    <div class='data-row'><strong>Telefon:</strong> $telefon</div>
    <div class='data-row'><strong>Üzenet:</strong><br>" . nl2br(htmlspecialchars($uzenet)) . "</div>

    <div class='footer-note'>
      Beküldve innen: <em>$source_page</em>
    </div>
  </div>
</body>
</html>
";

    // Felhasználónak automatikus visszajelzés (opcionális)
    $userBody = "
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
      margin: auto;
      background-color: #ffffff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    .logo {
      text-align: center;
      margin-bottom: 20px;
    }
    .logo img {
      max-height: 80px;
    }
    .content {
      font-size: 16px;
      color: #333;
    }
    .content p {
      line-height: 1.6;
    }
    .footer {
      margin-top: 30px;
      font-size: 13px;
      color: #777;
      text-align: center;
    }
  </style>
</head>
<body>
  <div class='email-container'>
    <div class='logo'>
      <img src='https://rdr2003.weboldal-gyorsan.hu/imgs/logo.png' alt='Cég logó'>
    </div>
    <div class='content'>
      <p>Kedves <strong>$keresztnev</strong>!</p>

      <p>Köszönjük jelentkezését. Hamarosan felvesszük Önnel a kapcsolatot.</p>

      <p>Üdvözlettel,<br>
      <strong>A csapat</strong></p>
    </div>
    <div class='footer'>
      Kérjük, ne válaszoljon erre az automatikus üzenetre.
    </div>
  </div>
</body>
</html>
";

    @mail($email, "Visszaigazolás", $userBody, $headers);

    if (mail($to, $subject, $body, $headers)) {
        echo "Köszönjük, az űrlapot sikeresen elküldtük!";
    } else {
        http_response_code(500);
        echo "Hiba történt az elküldés során.";
    }
} else {
    http_response_code(405);
    echo "Érvénytelen kérés.";
}
