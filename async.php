<?php
require 'vendor/autoload.php';
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Exception\RequestException;
$client = new Client(['base_uri' => 'https://jsonplaceholder.typicode.com/']);

$promise = $client->getAsync(
    'posts/1'
);

$promise->then(
  function(Response $resp){
      echo $resp->getBody();
  },
  function(RequestException $exception) {
      echo $exception->getMessage();
  }
);
$promise->wait();