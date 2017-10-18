<?php
require 'vendor/autoload.php';
use GuzzleHttp\Client;

$client = new Client(['base_uri' => 'https://jsonplaceholder.typicode.com/']);

$response = $client->get(
    'posts/1'
);

if ($response->hasHeader('content-type')) {
    $header = GuzzleHttp\Psr7\parse_header($response->getHeader('content-type'));
   foreach ($header as $value) {
       if (array_key_exists('charset', $value)){
           echo $value['charset'];
       }
   }
}