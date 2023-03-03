<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once $_SERVER['DOCUMENT_ROOT'].'/krsApi/vendor/autoload.php';

$registry = isset($_POST['registry-0']) ? $_POST['registry-0'] : $_POST['registry-1'];
$krs = $_POST["krs"];

$url = 'https://api-krs.ms.gov.pl/api/krs/OdpisAktualny/' . $krs. '?rejestr=' . $registry . '&format=json';

// -----------------------------------------------------------------------------
use GuzzleHttp\Client;

$client = new Client ([
    'base_uri' => $url,
]);

$response = $client->request('GET', '');

echo "<pre>";
print_r($client);
echo "</pre>";