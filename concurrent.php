<?php
require 'vendor/autoload.php';
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Exception\RequestException;
$client = new Client(['base_uri' => 'https://jsonplaceholder.typicode.com/']);

$promise = $client->getAsync(
    'posts/1'
);
$promise2 = $client->getAsync(
    'posts/2'
);

$promises = [$promise, $promise2];

$results = GuzzleHttp\Promise\settle($promises)->wait();

foreach($results as $result) {
    echo $result['value']->getBody();
}