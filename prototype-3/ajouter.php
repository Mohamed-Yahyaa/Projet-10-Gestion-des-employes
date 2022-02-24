<?php

include "employeeManager.php";
// Trouver tous les employés depuis la base de données 
$gestionEmployee = new GestionEmployee();


if(!empty($_POST)){
	$employe = new Employee();
	$employe->setfirstName($_POST['firstName']);
	$employe->setlastName($_POST['lastName']);
	$employe->setDate_of_Birth($_POST['Date_of_Birth']);
	$gestionEmployee->Ajouter($employe);
	
	// Redirection vers la page index.php
	header("Location: index.php");
}
?>

<form action="" method="POST">         
firstName: <input type="text" name="firstName" >                                                 
lastName : <input type="text" name="lastName" >
Date_of_Birth : <input type="date"  name="Date_of_Birth" >
   
<button type="submit">modifier</button>
</form>