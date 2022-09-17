<?php
require "vendor/autoload.php";

use GuzzleHttp\Client;

$client = new Client([
        'base_uri' => 'https://dummyjson.com/'
]);

$response = $client->get('https://dummyjson.com/');
$code = $response->getStatusCode();
$body = $response->getBody();
var_dump($body)
?>