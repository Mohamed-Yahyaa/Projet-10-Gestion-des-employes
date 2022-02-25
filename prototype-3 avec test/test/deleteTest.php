<?php
    include '../employeeManager.php';

    $employeeManager = new GestionEmployee();

    $employeeManager->delete(11);
?>