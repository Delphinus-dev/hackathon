<?php
session_start();
?>

<head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Lacquer%7CPrompt&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Les Yeuvs">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>PROJET</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/app.css" rel="stylesheet">

    <!-- CDN Javascript bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>


</head>

<main role="main" class="container">
    <div class="row bandeau_sup">
        <div class="col-8 question"><h3>Film 1/10 à trouver</h3></div>
        <div class="col-4 affichAvatar card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Nickname</p>
            </div>
        </div>
    </div>
    <div class="row jeuHaut">
        <div class="col-8 visuIndices">
            <div class="row indiceFourni"><h3>Texte indice fourni</h3></div>
            <div class="row indice2"><h3>Texte indice 2</h3></div>
            <div class="row indice3"><h3>Texte indice 3</h3></div>
            <div class="row indice4"><h3>Texte indice 4</h3></div>
            <div class="row indice5"><h3>Texte indice 5</h3></div>
        </div>
        <div class="col-4 zoneVisuSeringue">
            <div class="row visuScore">
                <h4>sang dispo:<b>10 L</b></h4>
            </div>
            <div class="row visuSeringue">
                <div class="progress" >
                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                    </div>
                </div>
                <div class=""></div>
            </div>
        </div>
    </div>
    <div class="row gestionIndices">
        <div class="col-6 indRestants">
            <p> X indices Restants</p>
            <button type="button" class="btn btn-primary">indice pour Y litres ?</button>
        </div>
        <div class="col-6 bonusRestants">
            <p> X super-bonus</p>
<!--            --><?php //?><!-- foreach ou for sur nb bonus restants-->
            <a href=""><img src="images/oeil.jpeg"></a>

        </div>
    </div>
    <div class="row affichageFilms">
        <div class="col-4 col3Films">
            <div class="affichAvatar card affFilm">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Titre du film</p>
                </div>
            </div>
            <!--            --><?php //?><!-- foreach ou for sur 3 films ?-->
        </div>
        <div class="col-4 col3Films">
            <div class="affichAvatar card affFilm">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Titre du film</p>
                </div>
            </div>
            <!--            --><?php //?><!-- foreach ou for sur 3 films ?-->
        </div>
        <div class="col-4 col3Films">
            <div class="affichAvatar card affFilm">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Titre du film</p>
                </div>
            </div>
            <!--            --><?php //?><!-- foreach ou for sur 3 films ?-->
        </div>
    </div>


</main>
