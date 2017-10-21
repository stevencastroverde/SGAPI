
<?php
require 'vendor/autoload.php';
use GuzzleHttp\Client;

$client = new Client();

$response = $client->get(
    'http://jsonplaceholder.typicode.com/posts/1'
);

var_dump($response);
$body = $response->getBody();
$string = $body->getContents();
$json = json_decode($string);

$response2 = $client->get(
    'http://jsonplaceholder.typicode.com/users/' . $json->userId
);
var_dump(json_decode($response2->getBody()));

echo $response2->getStatusCode();
echo $response2->getReasonPhrase();
if ($response2->getStatusCode() != 200){
    echo "Failure";
}