<?php

class Employe{
    private $Id;
    private $firstName;
    private $lastName;
    private $Date_of_Birth;

    
    public function getId() {
        return $this->Id;
    }
    public function setId($id) {
        $this->Id = $id;
    }

    public function getfirstName() {
        return $this->firstName;
    }
    public function setfirstName($nom) {
        $this->fristName = $nom;
    }

    public function getlastName() {
        return $this->lastName;
    }
    public function setlastName($prenom) {
        $this->lastName = $prenom;
    }

    public function getDate_of_Birth() {
        return $this->Date_de_naissance;
    }
    public function setDate_of_Birth($Date_de_naissance) {
        $this->Date_de_naissance = $Date_de_naissance;
    }

}
     
?>