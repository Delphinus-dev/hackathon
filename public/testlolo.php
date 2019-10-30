<?php
include '../src/config.php';
include '../src/db.php';
include '../vendor/autoload.php';

use Symfony\Component\HttpClient\HttpClient;

$client = HttpClient::create();
try {
    $response = $client->request('GET', 'https://hackathon-wild-hackoween.herokuapp.com/movies/2');
} catch (\Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface $e) {
}

try {
    $statusCode = $response->getStatusCode();
} catch (\Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface $e) {
} // get Response status code 200

if ($statusCode === 200) {
    try {
        $content = $response->getContent();
    } catch (\Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface $e) {
    } catch (\Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface $e) {
    } catch (\Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface $e) {
    } catch (\Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface $e) {
    }
    // get the response in JSON format

    try {
        $content = $response->toArray();
    } catch (\Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface $e) {
    } catch (\Symfony\Contracts\HttpClient\Exception\DecodingExceptionInterface $e) {
    } catch (\Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface $e) {
    } catch (\Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface $e) {
    } catch (\Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface $e) {
    }
    // convert the response (here in JSON) to an PHP array
}

echo (var_dump($content));
