<?php
    include '../employeeManager.php';

    $employeeManager = new GestionEmployee();
    $employee_data = $employeeManager->afficher();

    foreach($employee_data as $employee){
        echo $employee->getId();
        echo $employee->getFirstName();
        echo $employee->getLastName();
        echo $employee->getDate_of_Birth();
    }
?>