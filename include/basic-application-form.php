<link rel="stylesheet" href="css/basic-application-form.css">
<div class="text-center">
    <button id="myBtn" class="main-button">Űrlap Kitöltése</button>
</div>

<div id="myModal" class="application">
    <div class="application-content">
        <div class="application-header">
            <span class="close">&times;</span>
            <h2 class="text-white">Űrlap</h2>
        </div>
        <div class="application-body p-3">
            <form id="modalForm" method="post">
                <div class="row">
                    <input type="hidden" name="source_page" value="<?php echo $_SERVER['REQUEST_URI']; ?>">

                    <div class="col-lg-6 col-md-12">
                        <div class="form-floating mb-3">
                            <input type="text" name="vezeteknev" class="form-control" id="vezeteknev" placeholder="Kovács" required>
                            <label for="vezeteknev">Vezetéknév</label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-floating mb-3">
                            <input type="text" name="keresztnev" class="form-control" id="keresztnev" placeholder="Anna" required>
                            <label for="keresztnev">Keresztnév</label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-floating mb-3">
                            <input type="text" name="keresztnev2" class="form-control" id="keresztnev2" placeholder="Mária">
                            <label for="keresztnev2">Keresztnév 2, ha van</label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-floating mb-3">
                            <input type="text" name="cegnev" class="form-control" id="cegnev" placeholder="Cég Kft.">
                            <label for="cegnev">Cégnév</label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control" id="email" placeholder="valami@email.hu" required>
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-floating mb-3">
                            <input type="tel" name="telefon" class="form-control" id="telefon" placeholder="+36 30 123 4567" required>
                            <label for="telefon">Telefonszám</label>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-floating">
                            <textarea name="uzenet" class="form-control" id="uzenet" placeholder="Írd meg az üzenetedet" style="height: 100px" required></textarea>
                            <label for="uzenet">Üzenet / Miben segíthetünk?</label>
                        </div>
                    </div>
                    <!-- GDPR -->
                    <div class="col-lg-12 mt-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gdpr" name="gdpr" required>
                            <label class="form-check-label" for="gdpr">
                                Elfogadom az <a href="/adatkezelesi-tajekoztato.pdf" target="_blank">adatkezelési tájékoztatót</a>.
                            </label>
                        </div>
                    </div>
                    <!-- Visszajelzés helye -->
                    <div id="application-feedback" class="alert mt-3 text-center" style="display: none;"></div>

                    <div class="text-center mt-3">
                        <button type="submit" class="main-button">Küldés</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

<script src="js/basic-application-form.js"></script>

<script>
    // MODÁL kezelése
    const modal = document.getElementById("myModal");
    const btn = document.getElementById("myBtn");
    const span = document.getElementsByClassName("close")[0];

    btn.onclick = function() {
        modal.style.display = "block";
    };
    span.onclick = function() {
        modal.style.display = "none";
    };
    window.onclick = function(event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    };

    // Űrlapkezelés
    document.addEventListener("DOMContentLoaded", function() {
        const form = modal.querySelector("form");

        // Üzenet doboz létrehozása (ha még nincs)
        let feedback = document.getElementById("application-feedback");
        if (!feedback) {
            feedback = document.createElement("div");
            feedback.id = "application-feedback";
            feedback.className = "alert mt-3 text-center";
            feedback.style.display = "none";
            form.appendChild(feedback);
        }

        form.addEventListener("submit", async function(e) {
            e.preventDefault();
            feedback.style.display = "none";

            const formData = new FormData(form);
            const entries = Array.from(formData.entries());

            // Üres mezők ellenőrzése
            const missing = entries.find(([key, value]) => !value.trim());
            if (missing) {
                feedback.textContent = "Kérlek, tölts ki minden mezőt!";
                feedback.className = "alert alert-danger mt-3 text-center";
                feedback.style.display = "block";
                return;
            }

            try {
                const response = await fetch("https://rdr2003.weboldal-gyorsan.hu/basic-application-form_mail", {
                    method: "POST",
                    body: formData
                });
                const result = await response.text();

                feedback.textContent = result;
                feedback.className = response.ok ?
                    "alert alert-success mt-3 text-center" :
                    "alert alert-danger mt-3 text-center";
                feedback.style.display = "block";

                if (response.ok) {
                    form.reset();
                    setTimeout(() => {
                        feedback.style.display = "none";
                        modal.style.display = "none";
                    }, 2500);
                }

            } catch (error) {
                feedback.textContent = "Hiba történt a küldés során.";
                feedback.className = "alert alert-danger mt-3 text-center";
                feedback.style.display = "block";
            }
        });
    });
</script>