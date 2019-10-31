<?php
session_start();
$_SESSION["avatar"]=$_GET [ 'id' ] ;

header('Location: inscription.php');
exit;