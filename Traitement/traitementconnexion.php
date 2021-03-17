<?php
require_once '../Model/user.php';
require_once '../Manager/connexionbdd.php';

$user = new user(array(
    'mail' => $_POST['mail'],
    'mdp' => $_POST['mdp']
));
$mana = new connexionbdd($user);
$mana->connexion($user);


