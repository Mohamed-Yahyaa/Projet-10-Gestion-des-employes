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
            $sqlGetData = 'SELECT id, fname, lname, age FROM person1';
            $result = mysqli_query($this->getConnection() ,$sqlGetData);
            $employeesList = mysqli_fetch_all($result, MYSQLI_ASSOC);

            $employees = array();
            foreach($employeesList as $employee_list){
                $employee = new Employee();
                $employee->setId($employee_list['id']);
                $employee->setfname($employee_list['fname']);
                $employee->setlname($employee_list['lname']);
                $employee->setage($employee_list['age']);
                array_push($employees, $employee);
            }

            return $employees;
        }


        public function insertEmployee($employee){
            $fname = $employee->getfname();
            $lname = $employee->getlname();
            $age = $employee->getage();


                 // sql insert query
        $sqlInsertQuery = "INSERT INTO person1(fname, lname, age) 
                            VALUES('$fname', 
                                    '$lname',
                                    '$age'
                                    )";

        mysqli_query($this->getConnection(), $sqlInsertQuery);
        }


        public function deleteEmployee($id){
            $sqlDeleteQuery = "DELETE FROM person1 WHERE id= '$id'";

            mysqli_query($this->getConnection(), $sqlDeleteQuery);
        }


        public function editEmployee($id, $fname, $lname, $age){
     
            // Update query
            $sqlUpdateQuery = "UPDATE person1 SET 
                         fname='$fname', 
                         lname='$lname', 
                         age='$age' 
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
            $employee->setfname($employee_data['fname']);
            $employee->setlname($employee_data['lname']);
            $employee->setage($employee_data['age']);
            
            return $employee;
        }
    }


    
?>