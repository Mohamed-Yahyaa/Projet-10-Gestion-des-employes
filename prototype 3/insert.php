<?php
	include 'employeeManager.php';

    if(!empty($_POST)){
		$employee = new Employee();	
		$employeeManager = new EmployeeManager();

<<<<<<< HEAD
        $employee->setfname($_POST['fname']);
        $employee->setlname($_POST['lname']);
        $employee->setage($_POST['age']);
=======
        $employee->setFirstName($_POST['fname']);
        $employee->setLastName($_POST['lname']);
        $employee->setAge($_POST['age']);
        $employee->setGender($_POST['gender']);
>>>>>>> 3bf99ed5edb18d1b1107d6b39589fb98974a404b

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
<<<<<<< HEAD
				<label for="inputfname">First Name</label>
				<input type="text" required="required" id="inputfname" name="fname" placeholder="First Name">
=======
				<label for="inputFName">First Name</label>
				<input type="text" required="required" id="inputFName" name="fname" placeholder="First Name">
>>>>>>> 3bf99ed5edb18d1b1107d6b39589fb98974a404b
				<span></span>
			</div>
			
			<div>
<<<<<<< HEAD
				<label for="inputlname">Last Name</label>
				<input type="text" required="required" id="inputlname" name="lname" placeholder="Last Name">
=======
				<label for="inputLName">Last Name</label>
				<input type="text" required="required" id="inputLName" name="lname" placeholder="Last Name">
>>>>>>> 3bf99ed5edb18d1b1107d6b39589fb98974a404b
        		<span></span>
			</div>
			
			<div>
<<<<<<< HEAD
				<label for="inputage">Age</label>
				<input type="number" required="required" class="form-control" id="inputage" name="age" placeholder="Age">
				<span></span>
			</div>
		
=======
				<label for="inputAge">Age</label>
				<input type="number" required="required" class="form-control" id="inputAge" name="age" placeholder="Age">
				<span></span>
			</div>
				<div class="form-group">
					<label for="inputGender">Gender</label>
					<select class="form-control" required="required" id="inputGender" name="gender" >
						<option>Please Select</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
					<span></span>
        		</div>
>>>>>>> 3bf99ed5edb18d1b1107d6b39589fb98974a404b
    
			<div class="form-actions">
					<button type="submit">Create</button>
					<a href="index.php">Back</a>
			</div>
		</form>
        </div></div>        
</div>
</body>
</html>