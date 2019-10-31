<?php
session_start();
include '../src/functions.php';
if ($_SESSION["indicesRestants"]>=0) {
    $_SESSION["indicesRestants"]-=1;
    $_SESSION["vie"]-=$prixIndice;
}

header('Location: jeu.php');
exit;