<?php
require_once "./Manager/manager.php";
require_once '../Model/user.php';

$user = new user(array(
    'nom' => $_POST['changenom'],
    'prenom' => $_POST['changeprenom'],
    'age' => $_POST['changeage'],
));

$man = new manager($user);
$man->modifadmin($user);