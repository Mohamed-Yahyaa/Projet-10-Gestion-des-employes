<?php
      include "employeeManager.php";
      
      $gestionEmployee = new GestionEmployee();
      $data = $gestionEmployee->afficher();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <a href="ajouter.php">Ajouter un employé</a>
        <table>
            <tr>
                <th>firstName</th>
                <th>lastName</th>
                <th>Date of Birth</th>
            </tr>
            <?php 
                   foreach($data as $value){

                    ?>
                    <tr>
                        <td><?= $value->getfirstName() ?></td>
                        <td><?= $value->getlastName() ?></td>
                        <td><?= $value->getDate_of_Birth() ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $value->getId() ?>">Edit</a>
                            <a href="delete.php?id=<?php echo $value->getId() ?>">Delete</a>
                        </td>
                    </tr>
                    <?php  }?>
        </table>
    </div>
    
</body>
</html>