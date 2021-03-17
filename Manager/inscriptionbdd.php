<?php
require_once 'BDD.php';

class inscriptionbdd {

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
            $req1->execute(array(
                'nom' => $user->getNom(),
                'prenom' => $user->getPrenom(),
                'age'=>$user->getAge(),
                'mdp' => $user->getMdp(),
                'mail' => $user->getMail(),
                'role'=>0
            ));




            header('Location: ../signin.php');

        }





    }

}