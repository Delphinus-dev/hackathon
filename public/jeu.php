<?php

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Laurent Touret">
    <meta name="generator" content="Jekyll v3.8.5">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
    <title>PROJET</title>



</head>
<body>

<main role="main" class="container-fluid">
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
                    <div class="progress-bar progress-bar2 bg-danger" id="progressbar" data-top="50" data-height="50" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                    </div>
                </div>
                <div class=""></div>
            </div>
        </div>
    </div>
    <div class="row gestionIndices">
        <div class="col-6 indRestants">
            <p> X indices Restants</p>
            <button type="button" id="bouton-ind-restants" class="btn btn-primary">indice pour Y litres ?</button>
        </div>
        <div class="col-6 bonusRestants">
            <p> X super-bonus</p>
<!--            --><?php //?><!-- foreach ou for sur nb bonus restants-->
            <a href=""><img src="images/oeil.png"></a>

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
<section  id="accordion">
    <div class="row">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Les instructions, c'est ici !
                    </button>
                </h5>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
            </div>
        </div>
    </div>
</section>

<script>

    // script jquery (+ simple que js --- pas besoin de GET, etc...)
    $("body").on("click", "#bouton-ind-restants", function () {
        $("#progressbar").css("top", function() {
            niveau_top = parseInt($("#progressbar").attr("data-top"));
            // niveau_height = parseInt($("#progressbar").attr("data-height"));
            calcul =  (niveau_top * 1.05) + '%';
            $("#progressbar").attr("data-top", calcul);
            return calcul;
        });
        $("#progressbar").css("height", function() {
            niveau_height = parseInt($("#progressbar").attr("data-height"));
            calcul =  (niveau_height * 0.95) + '%';
            $("#progressbar").attr("data-height", calcul);
            return calcul;
        });

    });
        /*iveau_top = parseInt($("#progressbar").attr("data-top"));
        niveau_height = parseInt($("#progressbar").attr("data-height"));
        niveau_top -= 5;
        niveau_height += 5;
        nt = "" + niveau_top + "%";
        nh = "" + niveau_height + "%";
        // $("#progressbar").removeClass("progress-bar2");
        $("#progressbar").css({top:"70%", height:"30%"});*/


   /* $("#bouton-ind-restants").click(function ()
    {
        var niveau = $("#progressbar").attr("aria-valuenow");
        niveau -= 5;
        $("#progressbar").attr("aria-valuenow", niveau);
    });*/
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
