<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $lastName = $_POST['lastName'] ?? '';
    $firstName = $_POST['firstName'] ?? '';
    $firstName2 = $_POST['firstName2'] ?? '';
    $placeOfBirth = $_POST['placeOfBirth'] ?? '';
    $dateOfBirth = $_POST['dateOfBirth'] ?? '';
    $mothersName = $_POST['mothersName'] ?? '';
    $email = $_POST['email'] ?? '';
    $phoneNumber = $_POST['phoneNumber'] ?? '';
    $drivesLicenseNumber = $_POST['drivesLicenseNumber'] ?? '';
    $adrCertificate = $_POST['adrCertificate'] ?? '';
    $zipCode = $_POST['zipCode'] ?? '';
    $city = $_POST['city'] ?? '';
    $street = $_POST['street'] ?? '';
    $nationality = $_POST['nationality'] ?? 'Magyar';
    $page_url = $_SERVER['HTTP_REFERER'] ?? 'Ismeretlen oldal';
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Hibás e-mail cím.";
        exit;
    }
    if (!isset($_POST['adatkezeles'])) {
        echo "Kérjük, fogadja el az adatkezelési tájékoztatót.";
        exit;
    }
    // opcionálisan összefűzött név:
    $fullName = trim("$firstName $firstName2 $lastName");


    $to_company = 'molnar.mark@weboldal-gyorsan.hu';
    $to_user = $email;

    $subject = 'Új jelentkezés - RDR2003';

    // Üzenet
    $company_message = "
<html>
<head>
  <meta charset='UTF-8'>
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
      width: 180px;
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
    <div class='section-title'>Jelentkezési űrlap adatai</div>

    <div class='data-row'><strong>Vezetéknév:</strong> " . htmlspecialchars($lastName) . "</div>
    <div class='data-row'><strong>Keresztnév:</strong> " . htmlspecialchars($firstName) . "</div>
    <div class='data-row'><strong>Keresztnév 2:</strong> " . htmlspecialchars($firstName2) . "</div>
    <div class='data-row'><strong>Születési hely:</strong> " . htmlspecialchars($placeOfBirth) . "</div>
    <div class='data-row'><strong>Születési idő:</strong> " . htmlspecialchars($dateOfBirth) . "</div>
    <div class='data-row'><strong>Anyja neve:</strong> " . htmlspecialchars($mothersName) . "</div>
    <div class='data-row'><strong>Email cím:</strong> " . htmlspecialchars($email) . "</div>
    <div class='data-row'><strong>Telefonszám:</strong> " . htmlspecialchars($phoneNumber) . "</div>
    <div class='data-row'><strong>Jogosítvány száma:</strong> " . htmlspecialchars($drivesLicenseNumber) . "</div>
    <div class='data-row'><strong>ADR bizonyítvány érvényessége:</strong> " . htmlspecialchars($adrCertificate) . "</div>
    <div class='data-row'><strong>Irányítószám:</strong> " . htmlspecialchars($zipCode) . "</div>
    <div class='data-row'><strong>Város:</strong> " . htmlspecialchars($city) . "</div>
    <div class='data-row'><strong>Utca, házszám:</strong> " . htmlspecialchars($street) . "</div>
    <div class='data-row'><strong>Állampolgárság:</strong> " . htmlspecialchars($nationality ?: 'Magyar') . "</div>

    <div class='footer-note'>
      Beküldve innen: <em>" . htmlspecialchars($page_url) . "</em>
    </div>
  </div>
</body>
</html>
";


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
      <p>Kedves <strong>$firstName</strong>!</p>

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
    // Fejlécek
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: RDR2003 <molnar.mark@weboldal-gyorsan.hu>" . "\r\n";

    // E-mailek küldése
    mail($to_company, $subject, $company_message, additional_headers: $headers);
    mail($to_user, $subject, $userBody, $headers);

    // Visszajelzés
    echo '<div class="thanks">Köszönjük jelentkezését!<div>';
} else {
    http_response_code(405);
    echo "Érvénytelen kérés.";
}
