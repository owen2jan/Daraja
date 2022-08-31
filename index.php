<?php
    require_once 'functions.php';
    $key = 'key:secret';
    //registeUrls
    var_dump(darajaRequest($key, 'https://sandbox.safaricom.co.ke/mpesa/c2b/v1/registerurl',[
        "ShortCode" => 00000,
        "ResponseType" => "Completed",
        "ConfirmationURL" => "",
        "ValidationURL" => ""
    ]));
    //simulate
    var_dump(darajaRequest($key, 'https://sandbox.safaricom.co.ke/mpesa/c2b/v1/simulate',[
        "CommandID" => "CustomerBuyGoodsOnline",
        "Amount" => 1000,
        "Msisdn" => "254724628580",
        "BillRefNumber" => "00000",
        "ShortCode" => 00000
    ]));
