<?php
require_once '../Model/user.php';
require_once '../Manager/manager.php';

$user = new user(array(
    'mail' => $_POST['mail'],
    'mdp' => $_POST['mdp']
));
$mana = new manager($user);
$mana->connexion($user);


