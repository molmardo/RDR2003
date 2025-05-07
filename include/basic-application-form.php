<link rel="stylesheet" href="css/basic-application-form.css">
<div class="text-center">
    <button id="myBtn" class="application-btn">Űrlap Kitöltése</button>
</div>

<div id="myModal" class="application">

    <div class="application-content">
        <div class="application-header">
            <span class="close">&times;</span>
            <h2 class="text-white">Űrlap</h2>
        </div>
        <div class="application-body p-3">
            <form action="">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Gibsz Jakab" required>
                            <label for="floatingInput">Név</label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Gibsz Jakab" required>
                            <label for="floatingInput">Cégnév</label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Gibsz Jakab" required>
                            <label for="floatingInput">Email</label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Gibsz Jakab" required>
                            <label for="floatingInput">Telefonszám</label>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Írd meg az üzenetedet" id="floatingTextarea2" style="height: 100px" required></textarea>
                            <label for="floatingTextarea2">Üzenet / Miben segíthetünk?</label>
                        </div>
                    </div>
                    <div class="text-center mt-3">
                        <button type="submit" class="application-btn">Küldés</button>

                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

<script src="js/basic-application-form.js"></script>