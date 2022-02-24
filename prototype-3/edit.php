<?php

include "employeeManager.php";
$gestionEmployee = new GestionEmployee();

if(isset($_GET['id'])){
    $employe = $gestionEmployee->RechercherParId($_GET['id']);
}

if(isset($_POST['modifier'])){
    $id = $_POST['id'];
    $firstName = $_POST['firstName'];
    $prefirstName = $_POST['lastName'];
    $dateNaissance = $_POST['Date_of_Birth'];
    $gestionEmployee->Modifier($id,$firstName,$prefirstName,$Date_of_Birth);
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Modifier : </title>
</head>
<body>

<h1>Modification de l'employé : <?=$employe->getfirstName() ?></h1>
<form method="post" action="">
    <input type="text" required="required" 
        id="Id" name="Id"   
        value=<?php echo $employe->getId()?> >

    <div>
        <label for="firstName">firstName</label>
        <input type="text" required="required" 
        id="firstName" name="firstName"  placeholder="firstName" 
        value=<?php echo $employe->getfirstName()?> >
    </div>
    <div>
        <label for="lastName">lastName</label>
        <input type="text" required="required" 
        id="lastName" name="lastName" placeholder="lastName"
        value=<?php echo $employe->getlastName()?>>
    </div>
    <div>
        <label for="Date_of_Birth">Date of Birth</label>
        <input type="date" required="required"  
        id="Date_of_Birth"  name="Date_of_Birth" placeholder="Date de naissance"
        value=<?php echo $employe->getDate_of_Birth()?>>
    </div>
    <div>
        <input name="modifier" type="submit" value="Modifier">
        <a href="index.php">Annuler</a>
    </div>
</form>
</body>
</html>