<!DOCTYPE html>
<html lang="hu">

<head>
    <?php include "include/head.php"; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanácsaadás | RDR2003</title>
    <link rel="stylesheet" href="css/tanacsadas.css">
</head>

<body>
    <?php include "include/navigationbar.php"; ?>


    <section class="container">
        <h1>Tanácsaadás</h1>


        <p>Több mint 20 éve állunk partnereink rendelkezésére az ADR biztonsági tanácsadás területén, folyamatosan bővülő, magasan képzett szakértői csapatunkkal. Számos iparági területen szereztünk mélyreható tapasztalatot, a veszélyes áru szállításának minden szegmensét átfogva. Munkánkat nem sablonok szerint, hanem a cégek egyedi működésére szabva, precízen és naprakész tudással végezzük. Ügyfeleink számára nemcsak jogszabályi megfelelést, hanem valódi biztonságot és üzleti előnyt teremtünk.</p>

        <h2>Országos veszélyesáru-szállítási biztonsági tanácsadói szolgáltatás</h2>
        <p>A 25/2014. (IV. 30.) NFM rendelet előírásai szerint minden vállalkozás, amely Magyarországon veszélyes áru vagy veszélyes hulladék közúti szállításával foglalkozik, köteles legalább egy veszélyesáru-szállítási biztonsági tanácsadót megbízni. Cégünk vállalja a veszélyesáru-szállítási biztonsági tanácsadói feladatok teljes körű ellátását Magyarország egész területén. Segítünk a jogszabályi előírások betartásában, a szállítási folyamatok biztonságos megszervezésében, valamint támogatjuk a hatósági ellenőrzésekre való felkészülést is.</p>

        <p>Forduljon hozzánk bizalommal, ha tapasztalt és megbízható szakértőre van szüksége!</p>

        <h2>Szolgáltatásaink</h2>
        <div class="services">
            <div class="service">
                <img src="imgs/pexels-mikebirdy-192364.jpg" alt="Oktatás">
                <h4>ADR 1.3 fejezete szerinti oktatás</h4>
            </div>
            <div class="service">
                <img src="imgs/pexels-pavel-danilyuk-9143455.jpg" alt="Tanácsadás">
                <h4>Tanácsadás</h4>
            </div>
            <div class="service">
                <img src="imgs/pexels-eduardo199o9-178988127-17824889.jpg" alt="Jogszabályok vizsgálata">
                <h4>Jogszabályoknak való megfelelés vizsgálata</h4>
            </div>
            <div class="service">
                <img src="imgs/pexels-quintingellar-2199293.jpg" alt="Telephelyi bejárás">
                <h4>Telephelyi bejárások</h4>
            </div>
            <div class="service">
                <img src="imgs/two-guys-talking-about-work-work-garage-near-truck-transfer-documents-with-goods.jpg" alt="Csomagolóeszközök tanácsadás">
                <h4>Csomagolóeszközök minősítésével kapcsolatos tanácsadás</h4>
            </div>
            <div class="service">
                <img src="imgs/pexels-500photos-com-15338-93398.jpg" alt="Felszerelések beszerzése">
                <h4>ADR felszerelések, bárcák, táblák, jelölések beszerzése</h4>
            </div>
        </div>

        <h2>A tanácsadó alkalmazása mikor szükséges?</h2>
        <div class="when-needed">
            <div class="need">
                <img src="imgs/pexels-mikebirdy-192364.jpg" alt="Szállítás">
                <h4>Veszélyes áru telephelyen kívüli szállítása</h4>
            </div>
            <div class="need">
                <img src="imgs/pexels-pavel-danilyuk-9143455.jpg" alt="Feladás">
                <h4>Veszélyes áru feladása</h4>
            </div>
            <div class="need">
                <img src="imgs/pexels-eduardo199o9-178988127-17824889.jpg" alt="Tárolás">
                <h4>Veszélyes áru ideiglenes tárolása</h4>
            </div>
            <div class="need">
                <img src="imgs/pexels-quintingellar-2199293.jpg" alt="Becsomagolás">
                <h4>A veszélyes áru becsomagolása, töltése, be- és kirakodása, ürítése</h4>
            </div>
            <div class="need">
                <img src="imgs/pexels-500photos-com-15338-93398.jpg" alt="Hulladék">
                <h4>Veszélyes hulladékok csomagolása, szállítása, begyűjtése, kirakodása</h4>
            </div>
        </div>

        <h2>Érdekli? Kérjen ajánlatot!</h2>
        <div id="form-section">
            <form>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Gibsz Jakab" required>
                    <label for="floatingInput">Név</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Gibsz Jakab" required>
                    <label for="floatingInput">Cégnév</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Gibsz Jakab" required>
                    <label for="floatingInput">Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Gibsz Jakab" required>
                    <label for="floatingInput">Telefonszám</label>
                </div>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Írd meg az üzenetedet" id="floatingTextarea2" style="height: 100px" required></textarea>
                    <label for="floatingTextarea2">Üzenet / Miben segíthetünk?</label>
                </div>
                <button type="submit">Küldés</button>
            </form>
        </div>
    </section>

    <?php include "include/footer.php"; ?>
</body>

</html>