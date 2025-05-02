<!DOCTYPE html>
<html lang="hu">

<head>
    <?php include "include/head.php"; ?>
    <title>Osztrák ADR Tanfolyam</title>
    <link rel="stylesheet" href="css/tanfolyamok-css.css">
</head>

<body>
    <?php include "include/navigationbar.php"; ?>

    <div class="container">
        <div class="adr">
            <img src="imgs/pexels-500photos-com-15338-93398.jpg" alt="" class="header-img">
            <div class="adr-data">
                <h1 class="text-center">Osztrák ADR Tanfolyam</h1>
                <section>
                    <h2>Szabad időpontjaink</h2>
                    <p>
                        <strong>2025. május 29 - Június 1.</strong><br>
                        <strong>2025. június 5 - 8.</strong><br>
                        <strong>2025. június 12 - 15.</strong>
                    </p>
                </section>
                <section>
                    <h2>Fontos információk</h2>
                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <ul>
                                <li class="highlight">Csak magyarul beszélő, olvasó és író hallgatókat tudunk fogadni.</li>
                                <li class="highlight">Nem magyar születésű jelentkező esetén szükséges a személyi igazolvány másolata.</li>
                                <li class="highlight">Magyar nyelvű oktatás és vizsga, osztrák ADR bizonyítvánnyal (5 évig érvényes).</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="text-center">
                                <img src="imgs/adr.png" alt="ADR" class="adr-img">
                            </div>
                        </div>
                    </div>
                </section>
                <section>
                    <h2>Utazás</h2>
                    <p>Képzési napokon reggel 7:00-kor indulás <strong>Törökbálint, Spar parkolóból</strong>. Megállók: Tata (Shell kút), Győr (MOL kút).</p>
                </section>
                <section>
                    <h2>Képzés helyszíne</h2>
                    <p><strong>EDER PANSION</strong><br>2460 Bruck ad Leitha, Altstadt 19., Österreich</p>
                    <p>Visszaérkezés kb. 18:30 (vasárnap kb. 17:30). Képzés minden napon, az utolsó napon vizsga.</p>
                </section>
                <section>
                    <h2>Tanfolyam előnyei</h2>
                    <ul>
                        <li>Valós, gyakorlati tudás megszerzése.</li>
                        <li>Jelentős adminisztrációs könnyítés a magyar rendszerhez képest.</li>
                        <li>30 tesztkérdés, magyar nyelvű segédanyag használata megengedett.</li>
                    </ul>
                </section>
                <section>
                    <h2>Árak</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>Képzés típusa</th>
                                <th>Díj (Ft)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nem tartányos alaptanfolyam / ismeretfelújítás</td>
                                <td>158 000</td>
                            </tr>
                            <tr>
                                <td>Nem tartányos + tartányos alaptanfolyam és szakosítás</td>
                                <td>255 000</td>
                            </tr>
                            <tr>
                                <td>Nem tartányos + tartányos ismeretfelújító képzés</td>
                                <td>195 000</td>
                            </tr>
                            <tr>
                                <td>Tartányos szakosítás meglévő NT képesítéssel</td>
                                <td>158 000</td>
                            </tr>
                            <tr>
                                <td>ADR NT1 és NT7 (robbanó + radioaktív)</td>
                                <td>95 000</td>
                            </tr>
                        </tbody>
                    </table>
                    <a class="pdf-link" href="pdf/RDR_Tanfolyami díjak_Ausztria_2024_szeptembertől.pdf" target="_blank">Tanfolyami díjak (PDF letöltése)</a>
                </section>
                <section>
                    <h2>Szállás</h2>
                    <p><strong>EDER PANSION</strong> – reggelivel</p>
                    <ul>
                        <li>1 ágyas szoba: 44 Euro / 17.000 Ft</li>
                        <li>2 ágyas szoba: 33 Euro / 13.000 Ft</li>
                        <li>3 ágyas szoba: 31 Euro / 12.000 Ft</li>
                    </ul>
                    <p class="highlight">Lemondási határidő: a képzés hetében, hétfőn.</p>
                </section>
                <section>
                    <h2>Kérdése van?</h2>
                    <p>Forduljon hozzánk bizalommal az elérhetőségeink egyikén!</p>
                    <a href="./#kapcsolat">Elérhetőségeink</a>
                </section>
                <section>
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
                                <input type="date" class="form-control" id="floatingInput" placeholder="Gibsz Jakab" required>
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