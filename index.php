<?php
    include_once 'functions.php';

    //registerUrls
    var_dump(darajaRequest('https://sandbox.safaricom.co.ke/mpesa/c2b/v1/registerurl', [
        "ShortCode" => 600247,
        "ResponseType" => "Cancelled",
        "ConfirmationURL" => "https://5ade-197-237-240-21.ngrok.io/confirmation",
        "ValidationURL" => "https://5ade-197-237-240-21.ngrok.io/validation"
    ]));

    //simulate
    // var_dump(darajaRequest('https://sandbox.safaricom.co.ke/mpesa/c2b/v1/simulate', [
    //     "CommandID" => "CustomerBuyGoodsOnline",
    //     "Amount" => 1000,
    //     "Msisdn" => "254724628580",
    //     "BillRefNumber" => "00000",
    //     "ShortCode" => 00000
    // ]));
