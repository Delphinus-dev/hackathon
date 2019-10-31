<?php
session_start();
include '../src/functions.php';
$reponse=$_GET [ 'id' ] ;
$_SESSION['AfficheFilms'][$reponse]=0;
if ($reponse==$_SESSION["positionBonFilm"]){
    $_SESSION["vie"]+=$succesFilm;
    $_SESSION["questionEnCours"]+=1;
    if ($_SESSION["questionEnCours"]>10){
        header('Location: winner.php');
        exit;
    }
        nouvelleQuestion();
}
else {
    $_SESSION["vie"]-=$erreurFilm;
    if ($_SESSION["vie"]<0){
        header('Location: gameover.php');
        exit;
    }
}
header('Location: jeu.php');
exit;