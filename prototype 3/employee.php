<?php
    class Employee {
        private $id;
<<<<<<< HEAD
        private $fname;
        private $lname;
=======
        private $firstName;
        private $lastName;
        private $gender;
>>>>>>> 3bf99ed5edb18d1b1107d6b39589fb98974a404b
        private $age;

        public function getId(){
            return $this->id;
        }
        public function setId($value){
            $this->id = $value;
        }

<<<<<<< HEAD
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
=======
        public function getFirstName(){
            return $this->firstName;
        }

        public function setFirstName($value){
            $this->firstName = $value;
        }

        public function getLastName(){
            return $this->lastName;
        }

        public function setLastName($value){
            $this->lastName= $value;
        }

        public function getGender(){
            return $this->gender;
        }

        public function setGender($value){
            $this->gender= $value;
        }

        public function getAge(){
            return $this->age;
        }

        public function setAge($value){
>>>>>>> 3bf99ed5edb18d1b1107d6b39589fb98974a404b
            $this->age = $value;
        }
    }
?>