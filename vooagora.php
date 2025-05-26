<?php

$endpoint = 'https://api.newsky.app/api/v1/flights';
$apiKey = 'TRP_Zbdq2besYXsfzWAeWSwwR3OgGBIGFj';

$postData = [
    'airline_icao' => 'TRP'
];

$ch = curl_init($endpoint);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'x-api-key: ' . $apiKey
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));
curl_setopt($ch, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1_2); // forçando TLS 1.2

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$curlError = curl_error($ch);
curl_close($ch);

if ($curlError) {
    echo "<pre>Erro cURL: $curlError</pre>";
    exit;
}

header("Content-Type: application/json");
echo $response;
