<?php
require_once'bdd.php';

class managetfilm
{
public function slectfilm(){
    $bdd = new bdd();
    $req = $bdd->getStart()->prepare("SELECT * FROM film");
    $req->execute(array());
    $res = $req->fetchall();

    return($res);

}
public function selectfilm(){
    $bdd = new bdd();
    $req = $bdd->getStart()->prepare("SELECT * FROM film where id_film = :id_film");
    $req->execute(array());

}

    public function titreFilm($id){
        $bdd = new bdd();
        $req = $bdd->getStart()->prepare("SELECT nom_film FROM film where id_film = :id_film");
        $req->execute(array(
            ':id_film'=>$id
        ));

        $res=$req->fetch();
        return $res;

    }
    public function commentaire($coments){
        $bdd = new bdd();
        $req = $bdd->getStart()->prepare('INSERT INTO commentaires(nom_film, nom, commentaire) VALUES(:nom_film,:nom, :commentaire');
        $req1->execute(array(
            'nom' => $coments->getNom(),
            'nom_film' => $coments->getNom_film(),
            'commentaire' => $coments->getCommentaire()));

        return $req1;

    }
}