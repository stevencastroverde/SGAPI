
<?php
require 'vendor/autoload.php';
use GuzzleHttp\Client;

$client = new Client();
try {
    $response = $client->get(
        'https://httpbin.org/status/503'
    );


    var_dump($response);
} catch (\GuzzleHttp\Exception\ClientException $e) {
    echo $e->getCode() . "\r\n";
    echo $e->getMessage() . "\r\n";
}
catch (\GuzzleHttp\Exception\ServerException $e) {
    echo $e->getCode() . "\r\n";
    echo $e->getMessage() . "\r\n";
}