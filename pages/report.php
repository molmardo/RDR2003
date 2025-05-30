<?php
// Változók előkészítése
$successMessage = $errorMessage = '';
$name = $email = $type = $message = '';

// Csak akkor dolgozzuk fel, ha valóban POST-ból jött és a mezők nem üresek
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Biztonságos trim + XSS ellen védekezés
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $type = trim($_POST['type'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // Ellenőrizzük, hogy legalább az üzenet mező ki van-e töltve
    if ($message !== '') {
        $to = 'molnar.mark@weboldal-gyorsan.hu'; // ← IDE írd be a saját e-mail címed
        $subject = "Új visszajelzés: $type";

        // UTF-8 fejléc
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/plain; charset=UTF-8\r\n";
        $headers .= "From: Hibabejelentő <no-reply@domain.hu>\r\n";

        $body = "Név: " . ($name ?: 'Nincs megadva') . "\n";
        $body .= "E-mail: " . ($email ?: 'Nincs megadva') . "\n";
        $body .= "Típus: " . ($type ?: 'Nem ismert') . "\n\n";
        $body .= "Üzenet:\n$message";

        if (mail($to, $subject, $body, $headers)) {
            $successMessage = "Köszönöm a visszajelzést!";
            // Mezők ürítése sikeres beküldés után
            $name = $email = $type = $message = '';
        } else {
            $errorMessage = "Hiba történt az e-mail küldése közben.";
        }
    } else {
        $errorMessage = "Kérlek, töltsd ki az üzenet mezőt!";
    }
}
?>

<!DOCTYPE html>
<html lang="hu">

<head>
    <?php include "include/head.php"; ?>
    <meta charset="UTF-8">
    <title>Hibabejelentés és javaslatküldés</title>
    <link rel="stylesheet" href="css/report.css">
</head>

<body>
    <?php include "include/navigationbar.php"; ?>
    <br><br><br><br>
    <div class="container">
        <h1>Visszajelző oldal</h1>
        <br>
        <p>Kérlek, jelezd, ha hibát találtál az oldalon, vagy van javaslatod a fejlesztésre. Minden visszajelzést köszönettel fogadok!</p>
        <br>

        <?php if ($successMessage): ?>
            <div class="message"><?= $successMessage ?></div>
        <?php elseif ($errorMessage): ?>
            <div class="message error"><?= $errorMessage ?></div>
        <?php endif; ?>

        <form method="POST">
            <label for="name">Név (nem kötelező):</label>
            <input type="text" name="name" id="name" value="<?= htmlspecialchars($name) ?>">

            <label for="email">E-mail cím (ha szeretnél választ):</label>
            <input type="email" name="email" id="email" value="<?= htmlspecialchars($email) ?>">

            <label for="type">Típus:</label>
            <select name="type" id="type" required>
                <option value="">-- Válassz --</option>
                <option value="hiba" <?= $type === 'hiba' ? 'selected' : '' ?>>Hiba</option>
                <option value="javaslat" <?= $type === 'javaslat' ? 'selected' : '' ?>>Javaslat</option>
                <option value="egyéb" <?= $type === 'egyéb' ? 'selected' : '' ?>>Egyéb</option>
            </select>

            <label for="message">Üzenet:</label>
            <textarea name="message" id="message" rows="5" required><?= htmlspecialchars($message) ?></textarea>

            <button type="submit">Küldés</button>
        </form>

        <div class="log">
            <h2>Változtatások / Újdonságok</h2>
            <?php
            $logPath = __DIR__ . '/log.txt';
            if (file_exists($logPath)) {
                echo nl2br(htmlspecialchars(file_get_contents($logPath)));
            } else {
                echo "<p>Még nincsenek rögzített változások.</p>";
            }
            ?>
        </div>
    </div>

</body>

</html>