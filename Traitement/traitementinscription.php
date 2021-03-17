<?php
require_once '../Model/user.php';
require_once '../Manager/inscriptionbdd.php';

$user = new user(array(
    'nom' => $_POST['nom'],
    'prenom' => $_POST['prenom'],
    'age' => $_POST['age'],
    'mdp' => $_POST['mdp'],
    'mail' => $_POST['mail']

));
$man = new inscriptionbdd($user);
$man->Inscription($user);
