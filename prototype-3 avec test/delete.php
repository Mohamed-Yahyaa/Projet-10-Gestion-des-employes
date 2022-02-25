<?php
    include "employeeManager.php";

if(isset($_GET['id'])){

    // Trouver tous les employés depuis la base de données 
    $gestionEmployee = new GestionEmployee();
    $id = $_GET['id'] ;
    $gestionEmployee->delete($id);
        
    header('Location: index.php');
}
?>