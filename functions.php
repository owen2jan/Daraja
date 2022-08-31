<?php
function token($key)
{
    $curl = curl_init('https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_HTTPHEADER, ['Authorization:Basic ' . base64_encode($key)]);
    return json_decode(curl_exec($curl))->access_token;
}
function darajaRequest($key, $url, $data)
{
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($curl, CURLOPT_HTTPHEADER, [
        'Content-Type:Application/json; Charset=utf8',
        'Authorization:Bearer ' . token($key),
    ]);
    return json_decode(curl_exec($curl), true);
}