<!DOCTYPE html>
<html lang="hu">

<head>
    <?php include "include/head.php"; ?>
    <title>Adatkezelési Tájékoztató</title>
    <link rel="stylesheet" href="css/privacy-policy.css">
</head>

<body>
    <?php include "include/navigationbar.php"; ?>

    <div class="container privacy-content">
        <h1 class="text-center mb-4">Adatkezelési tájékoztató</h1>

        <div class="section">
            <h2>1. Bevezetés</h2>
            <p>Jelen tájékoztató célja, hogy ismertesse, hogyan kezeljük az Ön személyes adatait, amelyeket a weboldalunkon keresztül – különösen a kapcsolatfelvételi űrlap kitöltésével – ad meg. Az adatkezelés során a vonatkozó jogszabályoknak megfelelően járunk el, különösen az (EU) 2016/679 rendelet (GDPR) és a 2011. évi CXII. törvény (Info tv.) alapján.</p>
        </div>

        <div class="section">
            <h2>2. Az adatkezelő adatai</h2>
            <p><strong>Cégnév:</strong> RDR 2003 Kft</p>
            <p><strong>Székhely:</strong> Tópark utca 1/A., Törökbálint, Hungary</p>
            <p><strong>Email:</strong> rdr2003@rdr2003.hu</p>
        </div>

        <div class="section">
            <h2>3. Az adatkezelés célja és jogalapja</h2>
            <p>Az Ön által megadott adatokat az alábbi célokra használjuk fel:</p>
            <ul>
                <li>Kapcsolatfelvétel biztosítása</li>
                <li>Kérdések megválaszolása, segítségnyújtás</li>
                <li>Árajánlat küldése</li>
            </ul>
            <p>Az adatkezelés jogalapja az Ön hozzájárulása (GDPR 6. cikk (1) bekezdés a) pont), amelyet az űrlap elküldésével ad meg.</p>
        </div>

        <div class="section">
            <h2>4. Kezelt adatok köre</h2>
            <ul>
                <li>Név</li>
                <li>Email cím</li>
                <li>Üzenet tartalma</li>
            </ul>
            <p>Ezeket az adatokat kizárólag a fenti célok teljesítése érdekében kezeljük.</p>
        </div>

        <div class="section">
            <h2>5. Az adatkezelés időtartama</h2>
            <p>Az adatokat a beérkezéstől számított legfeljebb 12 hónapig tároljuk, vagy addig, amíg Ön nem kéri azok törlését.</p>
        </div>

        <div class="section">
            <h2>6. Adatokhoz való hozzáférés, adattovábbítás</h2>
            <p>A személyes adatokhoz kizárólag az adatkezelő és annak megbízott munkatársai férhetnek hozzá.</p>
            <p>Az adatok tárhelyszolgáltató partnerünk szerverein kerülnek tárolásra, amely biztosítja az adatok biztonságát. Az Ön adatai harmadik fél számára nem kerülnek átadásra marketing vagy egyéb célra.</p>
        </div>

        <div class="section">
            <h2>7. Külső szolgáltatók</h2>
            <p>Weboldalunk működtetéséhez a következő külső szolgáltatókat használjuk:</p>
            <ul>
                <li>Tárhelyszolgáltató: <a href="impressum#tarhelyszolgaltato">Ezit</a></li>
                <li>Google Analytics (a jövőben): Látogatottsági adatok elemzése céljából. A Google Analytics nem gyűjt név szerinti adatokat, de IP-cím alapján anonim statisztikát készít.</li>
            </ul>
        </div>

        <div class="section">
            <h2>8. Az érintettek jogai</h2>
            <p>Ön jogosult:</p>
            <ul>
                <li>Tájékoztatást kérni az adatkezelésről</li>
                <li>Hozzáférni a kezelt adatokhoz</li>
                <li>Kérni az adatok helyesbítését, törlését vagy korlátozását</li>
                <li>Tiltakozni az adatkezelés ellen</li>
                <li>Hozzájárulását bármikor visszavonni</li>
                <li>Panaszt tenni a Nemzeti Adatvédelmi és Információszabadság Hatóságnál (NAIH)</li>
            </ul>
            <p>NAIH elérhetősége:<br>
                Web: <a href="https://www.naih.hu" target="_blank">https://www.naih.hu</a><br>
                Cím: 1055 Budapest, Falk Miksa utca 9-11.<br>
                Telefon: +36 (1) 391-1400<br>
                Email: ugyfelszolgalat@naih.hu</p>
        </div>

        <div class="section">
            <h2>9. Cookie-k (sütik)</h2>
            <p>Weboldalunk sütiket (cookie-kat) használ a felhasználói élmény javítása érdekében. Az elengedhetetlenül szükséges cookie-k biztosítják az oldal működését, míg a statisztikai vagy marketing célú cookie-k csak az Ön kifejezett hozzájárulásával aktiválódnak.</p>
            <p>A sütik kezeléséről részletesen tájékoztatjuk Önt külön dokumentumban: <a href="<?= BASE_URL . $routes['cookie']['path'] ?>">Cookie (sütik) tájékoztató</a></p>
        </div>

        <div class="seciton">
            <h2>10. Adatbiztonság</h2>
            <p>Mindent megteszünk annak érdekében, hogy az Ön adatait a lehető legnagyobb biztonságban kezeljük. Weboldalunk HTTPS titkosítással működik, az adatokhoz való hozzáférés korlátozott, és megfelelő technikai és szervezési intézkedéseket alkalmazunk az adatvédelem érdekében.</p>
        </div>
        <div class="section">
            <p class="text-muted">Utolsó frissítés dátuma: 2025. január 1.</p>
        </div>
    </div>

    <?php include "include/footer.php"; ?>
    <?php include "include/cookie_notice.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>