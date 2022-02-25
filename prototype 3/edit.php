<?php
    include 'employeeManager.php';

    $employeeManager = new EmployeeManager();

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $employee = $employeeManager->getEmployee($id);

    }

    if(isset($_POST['update'])){
		$id = $_POST['id'];
<<<<<<< HEAD
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$age = $_POST['age'];
  

        $employeeManager->editEmployee($id, $fname, $lname, $age);
=======
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$gender = $_POST['gender'];
		$age = $_POST['age'];
  

        $employeeManager->editEmployee($id, $first_name, $last_name, $gender, $age);
>>>>>>> 3bf99ed5edb18d1b1107d6b39589fb98974a404b

        header('Location: index.php');
        
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
			<input type="hidden" id='id' name='id' value=<?php echo $employee->getId() ?>>
			<div>
<<<<<<< HEAD
				<label for="inputfname">First Name</label>
				<input	type="text" 
						required="required" 
						id="inputfname" 
						value=<?php echo $employee->getfname()?> 
						name="fname" 
=======
				<label for="inputFName">First Name</label>
				<input	type="text" 
						required="required" 
						id="inputFName" 
						value=<?php echo $employee->getFirstName()?> 
						name="first_name" 
>>>>>>> 3bf99ed5edb18d1b1107d6b39589fb98974a404b
						placeholder="First Name"
					>
				<span></span>
			</div>
			
			<div>
<<<<<<< HEAD
				<label for="inputlname">Last Name</label>
				<input	type="text" 
						required="required" 
						id="inputlname" 
						value=<?php echo $employee->getlname()?> 
						name="lname" 
=======
				<label for="inputLName">Last Name</label>
				<input	type="text" 
						required="required" 
						id="inputLName" 
						value=<?php echo $employee->getLastName()?> 
						name="last_name" 
>>>>>>> 3bf99ed5edb18d1b1107d6b39589fb98974a404b
						placeholder="Last Name"
					>
        		<span></span>
			</div>
			
			<div>
<<<<<<< HEAD
				<label for="inputage">Age</label>
				<input	type="number" 
						required="required" 
						class="form-control" 
						id="inputage" 
						value=<?php echo $employee->getage()?> 
=======
				<label for="inputAge">Age</label>
				<input	type="number" 
						required="required" 
						class="form-control" 
						id="inputAge" 
						value=<?php echo $employee->getAge()?> 
>>>>>>> 3bf99ed5edb18d1b1107d6b39589fb98974a404b
						name="age" 
						placeholder="Age"
					>
				<span></span>
			</div>
<<<<<<< HEAD
				
=======
				<div class="form-group">
					<label for="inputGender">Gender</label>
					<select class="form-control" required="required" id="inputGender" name="gender" >
						<option>Please Select</option>
                        <option value="Male" <?= $employee->getGender()== 'Male' ? 'selected' : '' ?>>Male</option>
						<option value="Female" <?= $employee->getGender()== 'Female' ? 'selected' : '' ?>>Female</option>
					</select>
					<span></span>
        		</div>
>>>>>>> 3bf99ed5edb18d1b1107d6b39589fb98974a404b
    
			<div class="form-actions">
					<input name="update" type="submit" value="Update">
					<a href="index.php">Back</a>
			</div>
		</form>
        </div></div>        
</div>
</body>
</html>