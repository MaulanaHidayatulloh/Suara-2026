<?php

header("Content-Type: application/json; charset=UTF-8");

$day = isset($_GET['day']) ? $_GET['day'] : date("Ymd");

$url = "https://api2.suara.com/v2/islamic/jadwal/sholat?day=".$day;

$ch = curl_init();

curl_setopt_array($ch,[
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 10,
    CURLOPT_HTTPHEADER => [
        "Authorization: Basic " . base64_encode("islamic:w#&=v%Q4;C+G{>:Jm(Rzf/")
    ]
]);

$response = curl_exec($ch);

if(curl_errno($ch)){
    echo json_encode([
        "error" => true,
        "message" => curl_error($ch)
    ]);
    exit;
}

$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

curl_close($ch);

if($httpCode != 200 || !$response){
    echo json_encode([
        "error" => true,
        "message" => "API tidak merespon"
    ]);
    exit;
}

echo $response;