<?php
function token()
{
    $curl = curl_init('https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials');
    curl_setopt($curl, CURLOPT_HTTPHEADER, ['Authorization:Basic ' . base64_encode('FhRAJvX9AkjbVCJkDLNMUdKoZ3zKVVAX:3xjsp2gRl9G642qe')]);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $token = json_decode(curl_exec($curl))->access_token;
    curl_close($curl);
    return $token;
}
function darajaRequest($url, $data)
{
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, ['Content-Type: Application/json', 'Authorization:Bearer ' . token()]);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    curl_close($curl);
    return $response;
}