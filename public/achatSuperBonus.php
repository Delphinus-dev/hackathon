<?php
session_start();
include '../src/functions.php';
if ($_SESSION["superBonus"]>=0) {
    $_SESSION["superBonus"]-=1;
    $_SESSION["vie"]-=$prixSuperBonus;
    if ($_SESSION["vie"]<=0){
        header('Location: gameover.php');
        exit;
    }
}

header('Location: jeu.php');
exit;