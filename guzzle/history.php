<?php
require 'vendor/autoload.php';
use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;

//add middleware handler that stores history of requests sent

$bucket = [];
//returns middleware layer which stores history into bucket
$history = Middleware::history($bucket);
//create middleware stack
$stack = HandlerStack::create();
// push history middleware onto handler stack
$stack->push($history);
//create new instance of client with handler stack
$client = new Client(['handler' => $stack]);

$client->get('http://jsonplaceholder.typicode.com/posts/2');
//create error
$client->get('http://jsonplaceholder.typicode.com/posts/0', ['http_errors'=> false]);

echo count($bucket) . "\r\n";

foreach ($bucket as $item) {
    echo $item['request']->getUri() . "\r\n";
    echo $item['response']->getBody() . "\r\n";
}