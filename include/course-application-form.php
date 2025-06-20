<link rel="stylesheet" href="css/course-application-form.css">

<div class="text-center">
    <button id="open-course-modal-application" class="main-button">Jelentkezési űrlap</button>
</div>

<div id="course-modal-application" class="course-modal-application">
    <div class="course-modal-application-content">
        <div class="course-modal-application-header">
            <span class="course-close">&times;</span>
            <h2>Jelentkezési űrlap</h2>
        </div>
        <div class="course-modal-application-body p-3">
            <div id="response-message"></div>
            <form method="post" id="application-form">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="lastName" id="floatingInput" required>
                            <label for="floatingInput">Vezetéknév</label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="firstName" id="floatingInput" required>
                            <label for="floatingInput">Keresztnév</label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="firstName2" id="floatingInput">
                            <label for="floatingInput">Keresztnév 2, ha van</label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="placeOfBirth" id="floatingInput" required>
                            <label for="floatingInput">Születési hely</label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" name="dateOfBirth" id="floatingInput" required>
                            <label for="floatingInput">Születési idő (éééé.hh.nn.)</label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="mothersName" id="floatingInput" required>
                            <label for="floatingInput">Anyja neve</label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" name="email" id="floatingInput" required>
                            <label for="floatingInput">Email cím</label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-floating mb-3">
                            <input type="tel" class="form-control" name="phoneNumber" id="floatingInput" required>
                            <label for="floatingInput">Telefonszám</label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="drivesLicenseNumber" id="floatingInput" required>
                            <label for="floatingInput">Jogosítvány szám</label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="adrCertificate" id="floatingInput">
                            <label for="floatingInput">A jelenlegi ADR bizonyítvány érvényessége/ha van (éééé.hh.nn)</label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" name="zipCode" id="floatingInput" required>
                            <label for="floatingInput">Irányítószám</label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="city" id="floatingInput" required>
                            <label for="floatingInput">Város</label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="street" id="floatingInput" required>
                            <label for="floatingInput">Utca, házszám</label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="nationality" id="floatingInput">
                            <label for="floatingInput">ÁLLAMPOLGÁRSÁG csak, ha nem magyar</label>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="adatkezeles" name="adatkezeles" required>
                            <label class="form-check-label" for="adatkezeles">
                                Elfogadom az <a href="<?= BASE_URL . $routes['privacy-policy']['path'] ?>" target="_blank">adatkezelési tájékoztatót</a>.
                            </label>
                        </div>

                    </div>
                    <div class="text-center">
                        <button type="submit" class="main-button">Küldés</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>

<script src="js/course-application-form.js"></script>
<script>
    document.getElementById('application-form').addEventListener('submit', function (e) {
        e.preventDefault();
        const form = this;
        const formData = new FormData(form);

        fetch('form_functions/course-application-form_mail', {
                method: 'POST',
                body: formData
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Hiba: ' + response.status);
                }
                return response.text();
            })
            .then(data => {
                console.log(data);
                document.getElementById('response-message').innerHTML = data;

                // Csak akkor ürítjük a formot, ha ténylegesen sikeres válasz jött
                if (data.includes("Köszönjük jelentkezését")) {
                    form.reset();
                }
            })
            .catch(error => {
                document.getElementById('response-message').innerHTML = "<div class='alert alert-danger'>Hiba történt: " + error.message + "</div>";
            });
    });
</script>
