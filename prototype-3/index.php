<?php
    include 'config.php';
    include 'employeeManager.php';

    $employeeManager = new EmployeeManager();
    $data = $employeeManager->getAllEmployees($conn);

?>



<body>
    <div>
        <a href="insert.php">Insert Data</a>
        <table>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Action</th>
            </tr>

            <?php
                    foreach($data as $person){
            ?>

            <tr>
                <td><?= $person['firstName']?></td>
                <td><?= $person['lastName']?></td>
                <td><?= $person['age']?></td>
                <td><?= $person['gender']?></td>
                <td>
                    <a href="edit.php?id=<?php echo $person['id'] ?>">Edit</a>
                    <a href="delete.php?id=<?php echo $person['id'] ?>">delete</a>
                </td>
            </tr>
            <?php }?>
        </table>
    </div>
</body>
</html>
