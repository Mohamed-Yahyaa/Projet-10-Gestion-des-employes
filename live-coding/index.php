<?php 

include "employee.php";
$employee = new Employee();
$employee->setfirstName("med");
echo $employee->getfirstName();


?>