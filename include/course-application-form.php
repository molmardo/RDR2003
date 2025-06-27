<link rel="stylesheet" href="css/course-application-form.css">

<div class="text-center">
    <button id="open-course-modal-application" class="main-button"><?= $lang['course-application-form']['button'] ?></button>
</div>

<div id="course-modal-application" class="course-modal-application">
    <div class="course-modal-application-content">
        <div class="course-modal-application-header">
            <span class="course-close">&times;</span>
            <h2><?= $lang['course-application-form']['title'] ?></h2>
        </div>
        <div class="course-modal-application-body p-3">
            <div id="response-message"></div>
            <form method="post" id="application-form">
                <div class="row">

                    <!-- Alapadatok -->
                    <div class="col-lg-6 col-md-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="lastName" id="lastName" required>
                            <label for="lastName"><?= $lang['course-application-form']['lastname'] ?></label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="firstName" id="firstName" required>
                            <label for="firstName"><?= $lang['course-application-form']['firstname'] ?></label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="firstName2" id="firstName2">
                            <label for="firstName2"><?= $lang['course-application-form']['secondFirstname'] ?></label>
                        </div>
                    </div>

                    <!-- Születési adatok -->
                    <div class="col-lg-6 col-md-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="placeOfBirth" id="placeOfBirth" required>
                            <label for="placeOfBirth"><?= $lang['course-application-form']['birthPlace'] ?></label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" name="dateOfBirth" id="dateOfBirth" required>
                            <label for="dateOfBirth"><?= $lang['course-application-form']['birthDate'] ?></label>
                        </div>
                    </div>

                    <!-- További adatok -->
                    <div class="col-lg-6 col-md-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="mothersName" id="mothersName" required>
                            <label for="mothersName"><?= $lang['course-application-form']['motherName'] ?></label>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" name="email" id="email" required>
                            <label for="email"><?= $lang['course-application-form']['email'] ?></label>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="form-floating mb-3">
                            <input type="tel" class="form-control" name="phoneNumber" id="phoneNumber" required>
                            <label for="phoneNumber"><?= $lang['course-application-form']['phone'] ?></label>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="drivesLicenseNumber" id="drivesLicenseNumber" required>
                            <label for="drivesLicenseNumber"><?= $lang['course-application-form']['licenseNumber'] ?></label>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="adrCertificate" id="adrCertificate">
                            <label for="adrCertificate"><?= $lang['course-application-form']['adrCertificate'] ?></label>
                        </div>
                    </div>

                    <!-- Cím -->
                    <div class="col-lg-6 col-md-12">
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" name="zipCode" id="zipCode" required>
                            <label for="zipCode"><?= $lang['course-application-form']['zipCode'] ?></label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="city" id="city" required>
                            <label for="city"><?= $lang['course-application-form']['city'] ?></label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="street" id="street" required>
                            <label for="street"><?= $lang['course-application-form']['street'] ?></label>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="nationality" id="nationality">
                            <label for="nationality"><?= $lang['course-application-form']['nationality'] ?></label>
                        </div>
                    </div>

                    <!-- GDPR -->
                    <div class="col-lg-12">
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="adatkezeles" name="adatkezeles" required>
                            <label class="form-check-label" for="adatkezeles">
                                <?= $lang['course-application-form']['gdprText'] ?>
                                <a href="<?= navLink('documents/privacy-policy') ?>" target="_blank">
                                    <?= $lang['course-application-form']['gdprLink'] ?>
                                </a>.
                            </label>
                        </div>
                    </div>

                    <!-- Gomb -->
                    <div class="text-center">
                        <button type="submit" class="main-button"><?= $lang['course-application-form']['sendBtn'] ?></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="js/course-application-form.js"></script>
<script>
    document.getElementById('application-form').addEventListener('submit', function(e) {
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