<?php
require 'vendor/autoload.php';
use GuzzleHttp\Client;

$client = new Client(['base_uri' => 'https://jsonplaceholder.typicode.com/']);

$response = $client->get(
    'posts/1'
);

var_dump($response);
echo $response->getBody()->getSize(20) . "\r\n";
echo $response->getBody()->read(20) . "\r\n";
echo $response->getBody()->getSize(20) . "\r\n";