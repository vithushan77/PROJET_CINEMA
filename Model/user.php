<?php


class user{

    private $nom;
    private $prenom;
    private $age;
    private $mail;
    private $mdp;
    private $role;


    public function __construct(array $donnees)
    {

        $this->hydrate($donnees);

    }
    public function hydrate(array $donnes)
    {
        foreach ($donnes as $key => $value){
            $method = 'set'.ucfirst($key);

            if (method_exists($this, $method)){
                $this->$method($value);
            }
        }
    }



    public function getNom()
    {
        return $this->nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }
    public function getAge()
    {
        return $this->age;
    }

    public function getMdp()
    {
        return $this->mdp;
    }

    public function getMail()
    {
        return $this->mail;
    }

    public function getRole()
    {
        return $this->role;
    }



    public function setNom($nom)
    {
        if (is_string($nom)) {
            $this->nom = $nom;
        }
    }
    public function setPrenom($prenom)
    {
        if (is_string($prenom)) {
            $this->prenom = $prenom;
        }
    }
    public function setAge($age)
    {
        if (is_string($age)) {
            $this->age= $age;
        }
    }

    public function setMdp($mdp)
    {
        if (is_string($mdp)) {
            $this->mdp = $mdp;
        }
    }


    public function setMail($mail)
    {
        if (is_string($mail)) {
            $this->mail = $mail;
        }
    }

    public function setRol($role)
    {
        if (is_string($role)) {
            $this->role = $role;
        }
    }

}