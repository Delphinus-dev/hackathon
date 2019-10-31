<?php
session_start();

if (!isset($_SESSION["indicesRestants"])){
    $_SESSION["indicesRestants"]=4;
}

include '../src/config.php';
include '../src/functions.php';

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Les Yeuvs">
    <meta name="generator" content="Jekyll v3.8.5">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lacquer&display=swap" rel="stylesheet">
    <title>PROJET</title>



</head>
<body class="containerjeu">
<section class="film">
    <div class="question"><h3>Film <?= $_SESSION["questionEnCours"]; ?>/<?= $filmsATrouver; ?> à deviner</h3></div>
</section>
<section class="nickname">
        <div class="affichAvatar">
            <img src="<?= monstreImage($_SESSION['avatar']); ?>" class="card-img-top2" alt="...">
            <div class="card-body">
                <p class="card-text2"><?= $_SESSION['nickname']; ?></p>
            </div>
        </div>
</section>
<section class="indices">
        <div class="visuIndices">
            <div class="indiceFourni"><h2>J'ai été produit en <?= filmAnnee($_SESSION["positionBonFilm"]); ?></h2></div>
            <div class="indice2"><h2>J'ai été produit en <?= filmPays($_SESSION["positionBonFilm"]); ?></h2></div>
            <div class="indice3"><h2>J'ai été produit par <?= filmRealisateur($_SESSION["positionBonFilm"]); ?></h2></div>
        </div>
</section>
<section class=points">
        <div class="visuScore">
            <h4>sang dispo : <?= $_SESSION["vie"]; ?> Litres</h4>
        </div>
</section>
<section class="seringue">
                <div>
                    <img src="images/seringue.png" alt="">
                </div>
</section>
<section class=gestionindices">
        <div class="indRestants">
            <p> <?= $_SESSION["indicesRestants"]; ?> indices Restants</p>
            <a href="/achatIndice.php">
            <button type="button" id="bouton-ind-restants" class="btn btn-primary">1 indice pour <?= $prixIndice ?> litres ?</button>
            </a>
        </div>
</section>
<section class="nesertarien"></section>
<section class=bonus">
        <div class="bonusRestants">
            <p> Super-Bonus restants</p>
            <?php for ($i = 0; $i < $_SESSION["superBonus"]; $i++):?>
                <a href="/achatSuperBonus.php"><img src="images/oeil.png"></a>
            <?php endfor; ?>
        </div>
</section>
<section class=affichagefilms1">
    <?php if ($_SESSION['AfficheFilms'][1]!=0):?>
    <div class="affichAvatar card affFilm">
        <a href="/valideRep.php?id=1">
        <img src="<?= filmPoster($_SESSION['Films'][1]); ?>" class="card-img-top"  width="300" alt="...">
        </a>
            <div class="card-body">
            <p class="card-text"><?= filmTitre($_SESSION['Films'][1]); ?></p>
        </div>
    </div>
    <?php endif ?>
</section>
<section class=affichagefilms2">
    <?php if ($_SESSION['AfficheFilms'][2]!=0):?>
        <div class="affichAvatar card affFilm">
            <a href="/valideRep.php?id=2">
                <img src="<?= filmPoster($_SESSION['Films'][2]); ?>" class="card-img-top"  width="300" alt="...">
            </a>
            <div class="card-body">
                <p class="card-text"><?= filmTitre($_SESSION['Films'][2]); ?></p>
            </div>
        </div>
    <?php endif ?>
</section>
<section class=affichagefilms3">
    <?php if ($_SESSION['AfficheFilms'][3]!=0):?>
        <div class="affichAvatar card affFilm">
            <a href="/valideRep.php?id=3">
                <img src="<?= filmPoster($_SESSION['Films'][1]); ?>" class="card-img-top"  width="300" alt="...">
            </a>
            <div class="card-body">
                <p class="card-text"><?= filmTitre($_SESSION['Films'][3]); ?></p>
            </div>
        </div>
    <?php endif ?>
</section>
<section class=affichagefilms4">
    <?php if ($_SESSION['AfficheFilms'][4]!=0):?>
        <div class="affichAvatar card affFilm">
            <a href="/valideRep.php?id=4">
                <img src="<?= filmPoster($_SESSION['Films'][4]); ?>" class="card-img-top"  width="300" alt="...">
            </a>
            <div class="card-body">
                <p class="card-text"><?= filmTitre($_SESSION['Films'][4]); ?></p>
            </div>
        </div>
    <?php endif ?>
</section>
<section class=affichagefilms5">
    <?php if ($_SESSION['AfficheFilms'][5]!=0):?>
        <div class="affichAvatar card affFilm">
            <a href="/valideRep.php?id=5">
                <img src="<?= filmPoster($_SESSION['Films'][5]); ?>" class="card-img-top"  width="300" alt="...">
            </a>
            <div class="card-body">
                <p class="card-text"><?= filmTitre($_SESSION['Films'][5]); ?></p>
            </div>
        </div>
    <?php endif ?>
</section>
<section class=affichagefilms6">
    <?php if ($_SESSION['AfficheFilms'][6]!=0):?>
        <div class="affichAvatar card affFilm">
            <a href="/valideRep.php?id=6">
                <img src="<?= filmPoster($_SESSION['Films'][6]); ?>" class="card-img-top"  width="300" alt="...">
            </a>
            <div class="card-body">
                <p class="card-text"><?= filmTitre($_SESSION['Films'][6]); ?></p>
            </div>
        </div>
    <?php endif ?>
</section>
<section class=affichagefilms7">
    <?php if ($_SESSION['AfficheFilms'][7]!=0):?>
        <div class="affichAvatar card affFilm">
            <a href="/valideRep.php?id=7">
                <img src="<?= filmPoster($_SESSION['Films'][7]); ?>" class="card-img-top"  width="300" alt="...">
            </a>
            <div class="card-body">
                <p class="card-text"><?= filmTitre($_SESSION['Films'][7]); ?></p>
            </div>
        </div>
    <?php endif ?>
</section>
<section class=affichagefilms8">
    <?php if ($_SESSION['AfficheFilms'][8]!=0):?>
        <div class="affichAvatar card affFilm">
            <a href="/valideRep.php?id=8">
                <img src="<?= filmPoster($_SESSION['Films'][8]); ?>" class="card-img-top"  width="300" alt="...">
            </a>
            <div class="card-body">
                <p class="card-text"><?= filmTitre($_SESSION['Films'][8]); ?></p>
            </div>
        </div>
    <?php endif ?>
</section>
<section class=affichagefilms9">
    <?php if ($_SESSION['AfficheFilms'][9]!=0):?>
        <div class="affichAvatar card affFilm">
            <a href="/valideRep.php?id=9">
                <img src="<?= filmPoster($_SESSION['Films'][9]); ?>" class="card-img-top"  width="300" alt="...">
            </a>
            <div class="card-body">
                <p class="card-text"><?= filmTitre($_SESSION['Films'][9]); ?></p>
            </div>
        </div>
    <?php endif ?>
</section>

<section  id="accordion3">
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
                Bienvenue sur Horror Quizz ! <br />
                Tu n'est pas arrivé là par hasard, ta réserve de sang est bien basse et nous avons la solution pour te nourrir, mais il faut gagner ce jeu !<br />
                Ce défi est-il pour toi ?<br />
                Tu vas devoir deviner le film qui correspond aux différents indices qui te sont proposés. Mais chaque indice te coûte du sang alors trouves vite la solution.<br />
                Comme on est sympa, on t'offre le premier indice et ensuite chacun d'eux vaut 1L de sang. Tu pourras vérifier ton niveau de vie gràce à la seringue.<br />
                A chaque indice, tu peux faire une proposition en sélectionnant l'une des 10 affiches , tu peux toujours reprendre un indice (il y en a 7 en tout).<br />
                Tu disposes également de 3 bonus (à -5L) pour les 10 manches.<br />
                Dès que tu trouves le bon film, tu passes au suivant.<br />
                Alors bon courage !
                 </div>
        </div>
    </div>
</section>

<script>


</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
