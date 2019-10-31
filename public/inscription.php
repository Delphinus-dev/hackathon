<?php
session_start();
include '../src/functions.php';

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
    <link href="https://fonts.googleapis.com/css?family=Lacquer&display=swap" rel="stylesheet">
    <title>Horror Quizz</title>
</head>

<body class="container-fluid">
<section class="monster">
    <div>
        <h1>CHOISIS TON MONSTRE</h1>
    </div>
    <div class="row">
        <?php
        for ($cpt = 1; $cpt < 6; $cpt++):?>
            <div class="col-sm card">
                <a href="/choixmonstre.php?id=<?= $cpt ?>">
                    <img class="card-img-top" src="<?= monstreImage($cpt); ?>" alt="Avatar du monstre <?= monstreNom($cpt); ?>"></a>
                <div class="card-body">
                    <p class="card-text"><?= monstreNom($cpt); ?></p>
                </div>
            </div>
        <?php endfor; ?>
    </div>
    <div class="row">
        <?php
        for ($cpt = 6; $cpt < 11; $cpt++):?>
            <div class="col-sm card">
                <a href="/choixmonstre.php?id=<?= $cpt ?>">
                    <img class="card-img-top" src="<?= monstreImage($cpt); ?>" alt="Avatar du monstre <?= monstreNom($cpt); ?>"></a>
                <div class="card-body">
                    <p class="card-text"><?= monstreNom($cpt); ?></p>
                </div>
            </div>
        <?php endfor; ?>
    </div>
    <div class="row">
        <?php
        for ($cpt = 11; $cpt < 16; $cpt++):?>
            <div class="col-sm card"><a href="/choixmonstre.php?id=<?= $cpt ?>">
                    <img class="card-img-top" src="<?= monstreImage($cpt); ?>" alt="Avatar du monstre <?= monstreNom($cpt); ?>"></a>
                <div class="card-body">
                    <p class="card-text"><?= monstreNom($cpt); ?></p>
                </div>
            </div>
        <?php endfor; ?>
    </div>
    <div class="row">
        <?php
        for ($cpt = 16; $cpt < 21; $cpt++):?>
            <div class="col-sm card"><a href="/choixmonstre.php?id=<?= $cpt ?>">
                    <img class="card-img-top" src="<?= monstreImage($cpt); ?>" alt="Avatar du monstre <?= monstreNom($cpt); ?>"></a>
                <div class="card-body">
                    <p class="card-text"><?= monstreNom($cpt); ?></p>
                </div>
            </div>
        <?php endfor; ?>
    </div>

</section>

<section class="name">
    <div class="row2">
        <div>
            <h1>NOMMES TON MONSTRE</h1>
        </div>
        <form method="post">
            <div>
                <label class="form" for="nom">Nickname :</label>
                <input type="text" name="nickname">
            </div>
        </form>
    </div>
    <div class="row">
        <a href="/jeu.php"><button type="button" class="btn btn-success">ALLEZ, ON JOUE ?</button></a>
    </div>
</section>

<section  id="accordion-inscription">
    <div class="row">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Les instructions, c'est par ici !
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
    </div>
</section>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
