<?php

    class EmployeeManager {

        public function getAllEmployees($conn){
            $sqlGetData = 'SELECT id, firstName, lastName, age, gender FROM employee';
            $result = mysqli_query($conn ,$sqlGetData);
            $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
            return $data;
        }


        public function insertEmployee($conn, $employee){
            $firstName = $employee->getFirstName();
            $lastName = $employee->getLastName();
            $age = $employee->getAge();
            $gender = $employee->getGender();

                 // sql insert query
        $sqlInsertQuery = "INSERT INTO employee(firstName, lastName, age, gender) 
                            VALUES('$firstName', 
                                    '$lastName',
                                    '$age', 
                                    '$gender')";

            mysqli_query($conn, $sqlInsertQuery);
        }


        public function deleteEmployee($conn, $id){
            $sqlDeleteQuery = "DELETE FROM employee WHERE id= '$id'";

            mysqli_query($conn, $sqlDeleteQuery);
        }


        public function editEmployee($conn, $employee, $id){
            $first_name = $employee->getFirstName();
            $last_name = $employee->getLastName();
            $gender = $employee->getGender();
            $age = $employee->getAge();
     
            // Update query
            $sqlUpdateQuery = "UPDATE employee SET 
                         firstName='$first_name', lastName='$last_name', age='$age', gender='$gender'
                         WHERE id=$id";
     
             // Make query 
             mysqli_query($conn, $sqlUpdateQuery);
       
        }

        public function getEmployee($conn, $id){
            $sqlGetQuery = "SELECT * FROM employee WHERE id= $id";
    
        // get result
        $result = mysqli_query($conn, $sqlGetQuery);
    
        // fetch to array
        $employee = mysqli_fetch_assoc($result);
        return $employee;
        }
    }


    
?>
