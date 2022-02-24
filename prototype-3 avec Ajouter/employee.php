<?php

class Employee{
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
    public function setfirstName($firstName) {
        $this->firstName = $firstName;
    }

    public function getlastName() {
        return $this->lastName;
    }
    public function setlastName($lastName) {
        $this->lastName = $lastName;
    }

    public function getDate_of_Birth() {
        return $this->Date_of_Birth;
    }
    public function setDate_of_Birth($Date_of_Birth) {
        $this->Date_of_Birth = $Date_of_Birth;
    }

}
     
?>