<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include './config.php';
require 'vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="pl" class="mx-0 my-0 px-0 py-0">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Krajowy rejestr sądowy</title>
</head>

<body class="container-fluid text-dark">

<div class="main-container shadow w-50 mx-auto">
    <div class="title_1">
        Pobierania danych z Krajowego Rejestru Sądowego
    </div>
    <div class="mx-4 py-4 text-center">

        <form class="py-4">
            <div class="form-group">
                <label for="krs" class="font-weight-bold"><h3>Numer KRS</h3></label>
                <input type="number" class="form-control" name="krs" id="krs" aria-describedby="krs" placeholder="Wprowadź numer KRS">
                <small id="krsError" class="form-text d-none text-danger font-weight-bold">Niepoprawny numer KRS</small>
            </div>

            <div class="custom-control custom-radio custom-control-inline mt-3">
                <input type="radio" class="custom-control-input" id="registry-0" name="registry-0" value="p">
                <label class="custom-control-label" for="registry-0"> P – przedsiębiorcy</label>
            </div>

            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="registry-1" name="registry-1" value="s">
                <label class="custom-control-label" for="registry-1"> S-stowarzyszenia </label>
            </div>
            <div class="col-auto mt-5">
                <button type="button" class="btn btn-dark w-25" id="search">Wyszukaj</button>
            </div>

        </form>
        <div id="response">123</div>
    </div>
</div>

</body>
</html>