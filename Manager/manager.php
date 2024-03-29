<?php
require_once'bdd.php';
session_start();

class manager
{

    public function Inscription($user) {

        $bdd = new bdd();
        $req=$bdd->getStart()-> prepare('SELECT * FROM utilisateurs WHERE mail= :mail');
        $req->execute(array(
            'mail'=>$user->getMail()
        ));
        $donne = $req->fetch();
        if($donne){
            header("Location: ../signup.php");
        }
        else {
            $bdd = new bdd();
            $req1 = $bdd->getStart()->prepare('INSERT INTO utilisateurs(nom, prenom, age, mdp,  mail, role) VALUES(:nom, :prenom, :age, :mdp, :mail, :role)');
            $pass_hache = password_hash($user->getMdp(), PASSWORD_DEFAULT);
            $req1->execute(array(
                'nom' => $user->getNom(),
                'prenom' => $user->getPrenom(),
                'age'=>$user->getAge(),
                'mdp'=> $pass_hache,
                'mail' => $user->getMail(),
                'role'=>0
            ));




            header('Location: ../signin.php');

        }





    }

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
            $_SESSION['id'] = $res['id'];
            $_SESSION['role'] = $res['role'];


            header('location:../index.php');

        }}

    public function supprimeruser()
    {
        $bdd = new bdd();
        $req = $bdd->getStart()->prepare("DELETE FROM utilisateurs WHERE id = :id");
        $req->execute(array(
            'id' => $_SESSION['id']

        ));



        if ($req) {

            header("Location: ../index.php");
        }
        else{
            echo "var_dump($req)";
        }

    }

    public function modifadmin($user){
        $bdd = new bdd();

        $req = $bdd->getStart()->prepare('UPDATE utilisateurs SET nom = :nom, prenom = :prenom, age = :age WHERE id = :id');
        $a = $req->execute(array(
            'nom'=>$user->getNom(),
            'prenom'=>$user->getPrenom(),
            'age'=>$user->getAge(),
            'id'=>$_SESSION['id']
            ));

            if($a){
                header("Location: ../index.php");
            }
            else{
                echo 'Erreur lors de la tentative de modification';
            }

        }

    }

}


