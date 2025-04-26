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
                        <tbody>
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
                    <div class="text-center">
                        <button class="application" id="myBtn">Jelentkezési űrlap kitöltése</button>
                    </div>
                </section>

            </div>
        </div>
    </div>

    <!-- Application model -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Jelentkezési űrlap</h2>
                <span class="close">&times;</span>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Gibsz Jakab" required>
                                <label for="floatingInput">Teljes név</label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Gibsz Jakab" required>
                                <label for="floatingInput">Születési hely</label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Gibsz Jakab" required>
                                <label for="floatingInput">Születési idő (éééé.hh.nn.)</label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Gibsz Jakab" required>
                                <label for="floatingInput">Anyja neve</label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Gibsz Jakab" required>
                                <label for="floatingInput">Emial cím</label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Gibsz Jakab" required>
                                <label for="floatingInput">Telefonszám</label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Gibsz Jakab" required>
                                <label for="floatingInput">Jogosítvány szám</label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Gibsz Jakab" required>
                                <label for="floatingInput">A jelenlegi ADR bizonyítvány érvényessége/ha van éééé.hh.nn</label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Gibsz Jakab" required>
                                <label for="floatingInput">A jelenlegi ADR igazolvány száma</label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Gibsz Jakab" required>
                                <label for="floatingInput">Állandó Lakcím</label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Gibsz Jakab" required>
                                <label for="floatingInput">Egyéb megjegyzés</label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Gibsz Jakab" required>
                                <label for="floatingInput">ÁLLAMPOLGÁRSÁG csak, ha nem magyar</label>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="application">Küldés</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>

    </div>
    <?php include "include/footer.php"; ?>

</body>

</html>
<script src="js/application-form.js"></script>