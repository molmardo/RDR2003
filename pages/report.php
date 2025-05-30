<?php
// E-mail küldés, ha POST kérés érkezik
$successMessage = $errorMessage = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name'] ?? 'Nincs megadva');
    $email = htmlspecialchars($_POST['email'] ?? 'Nincs megadva');
    $type = htmlspecialchars($_POST['type'] ?? 'Ismeretlen');
    $message = htmlspecialchars($_POST['message'] ?? '');

    $to = 'molnar.mark@weboldal-gyorsan.hu';
    $subject = "Új visszajelzés: $type";
    $body = "Név: $name\nE-mail: $email\nTípus: $type\nÜzenet:\n$message";

    if (mail($to, $subject, $body)) {
        $successMessage = "Köszönöm a visszajelzést!";
    } else {
        $errorMessage = "Hiba történt az e-mail küldése közben.";
    }
}
?>

<!DOCTYPE html>
<html lang="hu">

<head>
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
            <input type="text" name="name" id="name">

            <label for="email">E-mail cím (ha szeretnél választ):</label>
            <input type="email" name="email" id="email">

            <label for="type">Típus:</label>
            <select name="type" id="type" required>
                <option value="hiba">Hiba</option>
                <option value="javaslat">Javaslat</option>
                <option value="egyéb">Egyéb</option>
            </select>

            <label for="message">Üzenet:</label>
            <textarea name="message" id="message" rows="5" required></textarea>

            <button type="submit">Küldés</button>
        </form>

        <div class="log">
            <h2>Változások / Újdonságok</h2>
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