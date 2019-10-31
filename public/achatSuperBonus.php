<?php
session_start();
include '../src/functions.php';
if ($_SESSION["superBonus"]>=0) {
    $_SESSION["superBonus"]-=1;
    $_SESSION["vie"]-=$prixSuperBonus;

    $hasard=rand(1,9);

    while ($hasard==$_SESSION["positionBonFilm"] or $_SESSION['AfficheFilms'][$hasard]==0 ){
        $hasard=rand(1,9);
    }

    $_SESSION['AfficheFilms'][$hasard]=0;

    if ($_SESSION["vie"]<0){
        header('Location: gameover.php');
        exit;
    }
}

header('Location: jeu.php');
exit;