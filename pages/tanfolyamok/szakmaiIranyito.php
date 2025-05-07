<!DOCTYPE html>
<html lang="hu">

<head>
    <?php include "include/head.php"; ?>
    <title>Szakmai Irányító | RDR2003</title>
    <link rel="stylesheet" href="css/tanfolyamok-css.css">
</head>

<body>
    <?php include "include/navigationbar.php"; ?>

    <div class="container">
        <div class="adr">
            <img src="imgs/pexels-quintingellar-2199293.jpg" alt="AV Tanfolyam" class="header-img">
            <div class="adr-data">
                <h1 class="text-center">AV Tanfolyamok</h1>

                <section>
                    <h2>Tanfolyami díjak</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>Képzés típusa</th>
                                <th>Díj (Ft)</th>
                            </tr>
                        </thead>
                        <tbody class="price">
                            <tr>
                                <td>Árufuvarozói szakmai irányítói alapképesítő (AVN)</td>
                                <td>299.000</td>
                            </tr>
                            <tr>
                                <td>Árufuvarozói szakmai irányítói továbbképző (AVT)</td>
                                <td>199.000</td>
                            </tr>
                            <tr>
                                <td>Személyszállítói szakmai irányítói alapképesítő (BV)</td>
                                <td>299.000</td>
                            </tr>
                            <tr>
                                <td>Személyszállítói szakmai irányítói továbbképző (BVT)</td>
                                <td>199.000</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="highlight">
                        <p><em>Érvényes: 2023. október 01-től</em></p>
                    </div>
                </section>

                <section>
                    <h2>Képzés formája</h2>
                    <p>A szakmai irányítói tanfolyam online formában végezhető az E-titán rendszer felületén.</p>
                    <ul>
                        <li>Nincs helyhez vagy időhöz kötve, saját tempóban végezhető.</li>
                        <li>Regisztráció után azonnal elérhető.</li>
                    </ul>
                </section>

                <section>
                    <h2>Konzultációs nap</h2>
                    <p>Az online tananyag mellett egy egynapos személyes konzultációs alkalmat is biztosítunk:</p>
                    <ul>
                        <li>Időpont: szombati vagy vasárnapi napokon.</li>
                        <li>Helyszín: 2045 Törökbálint, Tópark utca 1/A, földszint (RDR 2003 Kft.).</li>
                    </ul>
                </section>

                <section>
                    <h2>Vizsga információk</h2>
                    <p>A tanfolyam elvégzése után kötelező vizsgát tenni a vizsgaközpontban.</p>
                    <ul>
                        <li><strong>Továbbképzés esetén:</strong> Számítógépes teszt és esettanulmány.</li>
                        <li><strong>Alapképzés esetén:</strong> Számítógépes teszt, esettanulmány és szóbeli vizsga.</li>
                    </ul>
                    <div class="highlight">
                        <p><strong>Fontos:</strong> Vizsgaidőpont csak az online tanfolyam sikeres teljesítése után foglalható!</p>
                    </div>
                </section>

                <section>
                    <h2>Jelentkezéshez szükséges dokumentumok</h2>
                    <ul>
                        <li>Személyazonosító igazolvány</li>
                        <li>Lakcímkártya</li>
                        <li>Szakmai irányító bizonyítvány (első sikeres vizsgát igazoló dokumentum)</li>
                    </ul>
                    <div class="highlight">
                        <p><strong>Kiemelten fontos:</strong> A vizsgára csak az eredeti bizonyítvány bemutatásával lehet jelentkezni, másolatot a Vizsgaközpont nem fogad el!</p>
                    </div>
                </section>

                <section>
                    <h2>Jelentkezés</h2>
                    <ul>
                        <li>Tanfolyam típusának megadása</li>
                        <li>Számlázási adatok</li>
                        <li>Kapcsolattartó neve és elérhetősége</li>
                    </ul>
                    <?php include "include/course-application-form.php"; ?>

                </section>

            </div>
        </div>
    </div>

    <?php include "include/footer.php"; ?>

</body>

</html>
<script src="js/application-form.js"></script>