<?php
require 'vendor/autoload.php';
use GuzzleHttp\Client;

$client = new Client(['base_uri' => 'https://jsonplaceholder.typicode.com/']);

$response = $client->get(
    'posts/1'
);

var_dump($response);

$response = $client->get(
    'posts/2'
);

var_dump($response);

$response = $client->get(
    'comments/1'
);

var_dump($response);

$response = $client->get(
    'https://httpbin.org/ip'
);

var_dump($response);