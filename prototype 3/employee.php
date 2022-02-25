<?php
    class Employee {
        private $id;
        private $fname;
        private $lname;
        private $age;

        public function getId(){
            return $this->id;
        }
        public function setId($value){
            $this->id = $value;
        }

        public function getfname(){
            return $this->firstName;
        }

        public function setfname($value){
            $this->firstName = $value;
        }

        public function getlname(){
            return $this->lastName;
        }

        public function setlname($value){
            $this->lastName= $value;
        }



        public function getage(){
            return $this->age;
        }

        public function setage($value){
            $this->age = $value;
        }
    }
?>