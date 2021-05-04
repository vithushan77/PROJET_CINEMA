<?php
require_once "./Manager/managetfilm.php";
require_once '../Model/modelcommentaires.php';

$coments = new user(array(
    'nom' => $_POST['nom'],
    'nom_film' => $_POST['nom_film'],
    'commentaire' => $_POST['commentaire'],
));

$man = new managetfilm($coments);
$man->commentaire($coments);
