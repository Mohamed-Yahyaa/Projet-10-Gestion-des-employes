<?php
    include "../employeeManager.php";

    $employee = new Employee;
    $employee->setFirstName('John');
    $employee->setLastName('Doe');
    $employee->setDate_of_Birth('01/01/2000');

    $employeeManager = new GestionEmployee();
    $employeeManager->Ajouter($employee);
?>