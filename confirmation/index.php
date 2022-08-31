<?php
header('Content-Type: application/json');

$log = fopen('log.txt', 'a');
fwrite($log, json_decode(file_get_contents('php://input'), true));
fclose($log);

echo json_encode([
    "ResultCode" => 0,
    "ResultDesc" => "Accepted"
]);

