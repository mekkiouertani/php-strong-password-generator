<?php
session_start();
include_once __DIR__ . "/partials/functions/functions.php";
include_once __DIR__ . "./partials/header.php";

if (isset($_GET['passwordLen'])) {
    $passwordLen = $_GET['passwordLen'];
    $_SESSION['password'] = generatePassword($passwordLen);
    header("Location: showpass.php");
    exit();
}
?>

<main class="container w-100 mt-5">

    <!--  -->
    <form form action="index.php" method="GET" class="bg-info p-5 rounded">
        <div class="row mb-3">
            <label for="passwordLen" class="col-6 text-end ">Inserisci la lunghezza della password
                desiderata:</label>
            <div class="col-6">
                <input type="number" min='6' max='20' class="form-control w-50" id="passwordLen" name="passwordLen"
                    required>
            </div>
        </div>
        <!--  -->
        <fieldset class="row mb-3">
            <legend class="col-form-label col-6 pt-0 text-end">Consenti ripetizioni di uno o più caratteri: </legend>
            <div class="col-6">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1"
                        checked>
                    <label class="form-check-label" for="gridRadios1">
                        Si
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                    <label class="form-check-label" for="gridRadios2">
                        No
                    </label>
                </div>
            </div>
        </fieldset>
        <!--  -->
        <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group bg-warning" role="group" aria-label="Basic checkbox toggle button group">
                <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                <label class="btn btn-outline-primary" for="btncheck1">Lettere</label>
                <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                <label class="btn btn-outline-primary" for="btncheck2">Numeri</label>
                <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
                <label class="btn btn-outline-primary" for="btncheck3">Simboli</label>
            </div>
            <!--  -->
            <button type="submit" class="btn btn-primary text-center d-block mt-3">Invia</button>
            <!--  -->
        </div>
    </form>
    <!--  -->
</main>
</body>

</html>