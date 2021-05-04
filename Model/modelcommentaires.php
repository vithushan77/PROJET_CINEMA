<?php
class coments{

    private $nom;
    private $nom_film;
    private $commentaire;

    public function getNom()
    {
        return $this->nom;
    }

    public function getNom_film()
    {
        return $this->nom_film;
    }
    public function getCommentaire()
    {
        return $this->commentaire;
    }


    public function setNom($nom)
    {
        if (is_string($nom)) {
            $this->nom = $nom;
        }
    }
    public function setNom_film($nom_film)
    {
        if (is_string($nom_film)) {
            $this->nom_film = $nom_film;
        }
    }
    public function setCommentaire($commentaire)
    {
        if (is_string($commentaire)) {
            $this->commentaire = $commentaire;
        }
    }
}