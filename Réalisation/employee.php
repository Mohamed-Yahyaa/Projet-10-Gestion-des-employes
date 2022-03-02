<?php
    class Employee {
        private $id;
        private $matricule;
        private $Nom;
        private $Prenom;
        private $date_de_naissance;
        private $Département;
        private $Salaire;
        private $Photo;
        private $Fonction;
        
        public function getId(){
            return $this->id;
        }
        public function setId($value){
            $this->id = $value;
        }

        public function getmatricule(){
            return $this->matricule;
        }

        public function setmatricule($value){
            $this->matricule = $value;
        }

        public function getNom(){
            return $this->Nom;
        }

        public function setNom($value){
            $this->Nom = $value;
        }

        public function getPrenom(){
            return $this->Prenom;
        }

        public function setPrenom($value){
            $this->Prenom= $value;
        }

        public function getdate_de_naissance(){
            return $this->date_de_naissance;
        }

        public function setdate_de_naissance($value){
            $this->date_de_naissance= $value;
        }

        public function getDépartement(){
            return $this->Département;
        }

        public function setDépartement($value){
            $this->Département = $value;
        }
        public function getFonction(){
            return $this->Fonction;
        }
        public function setFonction($value){
            $this->Fonction = $value;
        }
        public function getSalaire(){
            return $this->Salaire;
        }

        public function setSalaire($value){
            $this->Salaire = $value;
        }
    
         public function getPhoto(){
        return $this->Photo;
        }

    public function setPhoto($value){
        $this->Photo = $value;
        }
}
    
?>