<?php
session_start();
include '../src/functions.php';
if ($_SESSION["indicesRestants"]>=0) {
    $_SESSION["indicesRestants"]-=1;
    $_SESSION["vie"]-=$prixIndice;
    if ($_SESSION["vie"]<=0){
        header('Location: gameover.php');
        exit;
    }
}

header('Location: jeu.php');
exit;