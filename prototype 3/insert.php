<?php
	include 'employeeManager.php';

    if(!empty($_POST)){
		$employee = new Employee();	
		$employeeManager = new EmployeeManager();

        $employee->setfname($_POST['fname']);
        $employee->setlname($_POST['lname']);
        $employee->setage($_POST['age']);

		$employeeManager->insertEmployee($employee);
     
        header("Location: index.php");

    }
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
        <div>
		<div><h3>Create a User</h3>
        <form method="POST" action="">
			<div>
				<label for="inputfname">First Name</label>
				<input type="text" required="required" id="inputfname" name="fname" placeholder="First Name">
				<span></span>
			</div>
			
			<div>
				<label for="inputlname">Last Name</label>
				<input type="text" required="required" id="inputlname" name="lname" placeholder="Last Name">
        		<span></span>
			</div>
			
			<div>
				<label for="inputage">Age</label>
				<input type="number" required="required" class="form-control" id="inputage" name="age" placeholder="Age">
				<span></span>
			</div>
		
    
			<div class="form-actions">
					<button type="submit">Create</button>
					<a href="index.php">Back</a>
			</div>
		</form>
        </div></div>        
</div>
</body>
</html>