<?php

include 'config.php';
include '../vendor/autoload.php';
include 'db.php';


use Symfony\Component\HttpClient\HttpClient;

function pasUnder(string $mot): string{
    return str_replace('_',' ', $mot);
}

function monstre(int $id): array{

    $client = HttpClient::create();
    try {
        $response = $client->request('GET', 'https://hackathon-wild-hackoween.herokuapp.com/monsters/'.$id.'');
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

    return $content;
}

function film(int $id): array{

    $client = HttpClient::create();
    try {
        $response = $client->request('GET', 'https://hackathon-wild-hackoween.herokuapp.com/movies/'.$id.'');
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

    return $content;
}

function filmTitre(int $id): string {
    return pasUnder(film($id)['movie']['title']);
}

function filmRealisateur(int $id): string {
    return pasUnder(film($id)['movie']['director']);
}

function filmAnnee(int $id): int {
    return film($id)['movie']['year'];
}

function filmPays(int $id): string {
    return pasUnder(film($id)['movie']['country']);
}

function filmPoster(int $id): string {
    return film($id)['movie']['posterUrl'];
}

function monstreNom(int $id): string {
    return pasUnder(monstre($id)['monster']['name']);
}

function monstreImage(int $id): string {
    return monstre($id)['monster']['picture'];
}

function monstreDescription(int $id): string {
    return monstre($id)['monster']['description'];
}

function nouvelleQuestion(){
    $melangeFilms = range(1, 82);
    shuffle($melangeFilms);

    for ($i=1; $i<10; $i++){
        $_SESSION['Films'][$i]=$melangeFilms[$i];
        $_SESSION['AfficheFilms'][$i]=1;
    }

    for ($i=2; $i<4; $i++){
        $_SESSION['AfficheIndice'][$i]=0;
    }

    $_SESSION["positionBonFilm"]=rand(1, 9);
}

function enleveFilms(){
    $melangeFilms = range(1, 9);
    shuffle($melangeFilms);

    for ($i=1; $i<10; $i++){
        $_SESSION['Films'][$i]=$melangeFilms[$i];
        $_SESSION['AfficheFilms'][$i]=1;
    }
    $_SESSION["positionBonFilm"]=rand(1, 9);
}