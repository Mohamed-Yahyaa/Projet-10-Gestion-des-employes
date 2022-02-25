<?php
    include 'employee.php';

    class EmployeeManager {

        private $Connection = null;

        private function getConnection(){
            if(is_null($this->Connection)){
                $this->Connection = mysqli_connect('localhost', 'yahya', 'DIXTERMORGEN', 'demo');

                if(!$this->Connection){
                    $message = 'Connection Error: ' .mysqli_connect_error();
                    throw new Exception($message);
                }
            }
            return $this->Connection;
        }

   

        public function getAllEmployees(){
<<<<<<< HEAD
            $sqlGetData = 'SELECT id, fname, lname, age FROM person1';
=======
            $sqlGetData = 'SELECT id, first_name, last_name, age, gender FROM person1';
>>>>>>> 3bf99ed5edb18d1b1107d6b39589fb98974a404b
            $result = mysqli_query($this->getConnection() ,$sqlGetData);
            $employeesList = mysqli_fetch_all($result, MYSQLI_ASSOC);

            $employees = array();
            foreach($employeesList as $employee_list){
                $employee = new Employee();
                $employee->setId($employee_list['id']);
<<<<<<< HEAD
                $employee->setfname($employee_list['fname']);
                $employee->setlname($employee_list['lname']);
                $employee->setage($employee_list['age']);
=======
                $employee->setFirstName($employee_list['first_name']);
                $employee->setLastName($employee_list['last_name']);
                $employee->setGender($employee_list['gender']);
                $employee->setAge($employee_list['age']);
>>>>>>> 3bf99ed5edb18d1b1107d6b39589fb98974a404b
                array_push($employees, $employee);
            }

            return $employees;
        }


        public function insertEmployee($employee){
<<<<<<< HEAD
            $fname = $employee->getfname();
            $lname = $employee->getlname();
            $age = $employee->getage();


                 // sql insert query
        $sqlInsertQuery = "INSERT INTO person1(fname, lname, age) 
                            VALUES('$fname', 
                                    '$lname',
                                    '$age'
                                    )";
=======
            $firstName = $employee->getFirstName();
            $lastName = $employee->getLastName();
            $age = $employee->getAge();
            $gender = $employee->getGender();

                 // sql insert query
        $sqlInsertQuery = "INSERT INTO person1(first_name, last_name, age, gender) 
                            VALUES('$firstName', 
                                    '$lastName',
                                    '$age', 
                                    '$gender')";
>>>>>>> 3bf99ed5edb18d1b1107d6b39589fb98974a404b

        mysqli_query($this->getConnection(), $sqlInsertQuery);
        }


        public function deleteEmployee($id){
            $sqlDeleteQuery = "DELETE FROM person1 WHERE id= '$id'";

            mysqli_query($this->getConnection(), $sqlDeleteQuery);
        }


<<<<<<< HEAD
        public function editEmployee($id, $fname, $lname, $age){
     
            // Update query
            $sqlUpdateQuery = "UPDATE person1 SET 
                         fname='$fname', 
                         lname='$lname', 
                         age='$age' 
=======
        public function editEmployee($id, $first_name, $last_name, $gender, $age){
     
            // Update query
            $sqlUpdateQuery = "UPDATE person1 SET 
                         first_name='$first_name', 
                         last_name='$last_name', 
                         age='$age', 
                         gender='$gender'
>>>>>>> 3bf99ed5edb18d1b1107d6b39589fb98974a404b
                         WHERE id=$id";
     
             // Make query 
             mysqli_query($this->getConnection(), $sqlUpdateQuery);

             if(mysqli_error($this->getConnection())){
                 $msg = 'Erreur' . mysqli_errno($this->getConnection());
                 throw new Exception($msg);
             }
       
        }

        public function getEmployee($id){
            $sqlGetQuery = "SELECT * FROM person1 WHERE id= $id";
        
            // get result
            $result = mysqli_query($this->getConnection(), $sqlGetQuery);
        
            // fetch to array
            $employee_data = mysqli_fetch_assoc($result);

            $employee = new Employee();
            $employee->setId($employee_data['id']);
<<<<<<< HEAD
            $employee->setfname($employee_data['fname']);
            $employee->setlname($employee_data['lname']);
            $employee->setage($employee_data['age']);
=======
            $employee->setFirstName($employee_data['first_name']);
            $employee->setLastName($employee_data['last_name']);
            $employee->setAge($employee_data['age']);
            $employee->setGender($employee_data['gender']);
>>>>>>> 3bf99ed5edb18d1b1107d6b39589fb98974a404b
            
            return $employee;
        }
    }


    
?>