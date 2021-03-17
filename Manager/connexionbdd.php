<?php

session_start();
require_once 'BDD.php';

class connexionbdd{
    public function connexion($user){
    $bdd = new bdd();
    $req = $bdd->getStart()->prepare("SELECT * FROM utilisateurs WHERE mail = :mail AND mdp = :mdp");

    foreach($_POST as $key=>&$val){
        $req->bindParam($key,$val);
}

    $req->execute();
    $res = $req->fetch();

;
    if ($res) {
        $_SESSION['mail'] = $user->getMail();
        $_SESSION['mdp'] = $user->getMdp();

            header('location:../index.php');

        }}}

