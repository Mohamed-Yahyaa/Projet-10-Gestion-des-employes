<?php 

class Employee{
    private $id;
    private $firstName;
    private $lastName;
    private $gender;
    private $age;


   public function getid(){
       return $this->id;
   }
   public function setid($value){
       $this->id = $value;
   }

   public function getfirstName(){
       return $this->firstName;
   }
   public function setfirstName($value){
       $this->firstName = $value;
   }

   public function getlastName(){
    return $this->lastName;
}
public function setlastName($value){
    $this->lastName = $value;
}

public function getgender(){
    return $this->gender;
}
public function setgender($value){
    $this->gender = $value;
}

public function getage(){
    return $this->age;
}
public function setage($value){
    $this->age = $value;
}
}



?>