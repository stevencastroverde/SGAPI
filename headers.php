
<?php
require 'vendor/autoload.php';
use GuzzleHttp\Client;

$client = new Client();

$response = $client->get(
    'http://jsonplaceholder.typicode.com/posts/1'
);

var_dump($response);
$headers = $response->getHeaders();

foreach ($headers as $name => $value) {
    $value = implode(', ', $value);
    echo "{$name} : {$value}\r\n";
}

$type = $response->getHeader('Content-Type');
if( in_array('application/json; charset=utf8', $type)){
    $body = json_decode($response->getBody());
} else  {
    $body = $response->getBody();
}

var_dump($body);