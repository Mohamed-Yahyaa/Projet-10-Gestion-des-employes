<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<?php
    include 'employeeManager.php';

    $employeeManager = new EmployeeManager();

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $employee = $employeeManager->getEmployee($id);

    }

    if(isset($_POST['update'])){

		$ficher = $_FILES["uploadfile"]["name"];
		$employeeToEdit = new Employee();

	    $employeeToEdit->setmatricule($_POST['matricule']);
		$employeeToEdit->setnom($_POST['nom']);
		$employeeToEdit->setprenom($_POST['prenom']);
		$employeeToEdit->setdate_de_naissance( $_POST['date_de_naissance']);
		$employeeToEdit->setdépartement($_POST['département']);
		$employeeToEdit->setfonction($_POST['fonction']);
		$employeeToEdit->setsalaire( $_POST['salaire']) ;
		$tempname = $_FILES["uploadfile"]["tmp_name"];    

        if(!empty($ficher)){
            $employeeToEdit->setPhoto($ficher);
            $employeeManager->upload_photo($ficher, $tempname);
        } else {
            $employeeToEdit->setPhoto($employee->getPhoto());
        }


        $employeeManager->editEmployee($employeeToEdit, $id);

        header('Location: index.php');
        
    }
	
    
?>





	

			<div class="col-6 " style="margin-left:320px" >
		      	<form action="#" method="POST" class=""style="background-color: #05445E;border-radius: 16px; text-align: center;margin-top:50px; height: 670px;" enctype='multipart/form-data'>
				  <h2 style="padding-top:30px; color:white">Ajoute les informations</h2>
					<div class="">
						<input style="width:350px ;margin-top:40px; height: 40px; border-radius: 10px;  border:1px solid" type="text" value=<?php echo $employee->getnom() ?> class=" col-6" name="nom" placeholder="nom" required>
					</div>
					<div class="">
						<input type="text" style="width:350px ;margin-top:20px; height: 40px; border-radius: 10px;border:1px solid" class=" col-6" value=<?php echo $employee->getprenom()?> name="prenom" placeholder="prenom" required>
					</div>
					<div class="">
						<input type="Date" style="width:350px ;margin-top:20px; height: 40px; border-radius: 10px;border:1px solid" class="col-6 " value=<?php echo $employee->getdate_de_naissance()?> name="date_de_naissance"  required>
					</div>
					<div class="" >
					<select class="form-select "required style="width:350px ;margin-top:20px;margin-left:250px; height: 40px; border-radius: 10px;border:1px solid ;" class="col-6"  name="département"  aria-label="Default select example">
										<option selected>département...</option>
										<option value="Accounting" <?= $employee->getdépartement()== 'Accounting' ? 'selected' : '' ?>>Accounting</option>
										<option value="Marketing" <?= $employee->getdépartement()== 'Marketing' ? 'selected' : '' ?>>Marketing</option>
										<option value="Production" <?= $employee->getdépartement()== 'Production' ? 'selected' : '' ?>>Production</option>
										<option value="I.T" <?= $employee->getdépartement()== 'I.T' ? 'selected' : '' ?>>I.T</option>
									</select>
					</div>
					<div class="">
                               
									<select class="form-select" class="" required name="fonction" class="col-6" style="margin-left:250px;width:350px;margin-top:20px; height: 40px; border-radius: 10px;border:1px solid" placeholder="Function"  	aria-label="Default select example">
										<option selected>Function...</option>
										<option value="auditor" <?= $employee->getfonction()== 'auditor' ? 'selected' : '' ?>>auditor</option>
										<option value="CFO" <?= $employee->getfonction()== 'CFO' ? 'selected' : '' ?>>CFO</option>
										<option value="payroll specialist" <?= $employee->getfonction()== 'payroll specialist' ? 'selected' : '' ?>>payroll specialist</option>
										<option value="tax specialist" <?= $employee->getfonction()== 'tax specialist' ? 'selected' : '' ?>>tax specialist</option>
										<option value="advertising manager" <?= $employee->getfonction()== 'advertising manager' ? 'selected' : '' ?>>advertising manager</option>
										<option value="brand manager"  <?= $employee->getfonction()== 'brand manager' ? 'selected' : '' ?>>brand manager</option>
                                    </select >
					</div>
					
					<div class="">
						<input type="number" style="width:350px;margin-top:20px; height: 40px; border-radius: 10px;border:1px solid" class="col-6" name="salaire" value=<?php echo $employee->getsalaire()?> placeholder="salaire" required>
					</div>
					<div class="">

						<input type="file" style="width:350px;margin-top:20px;margin-bottom:20px; height: 40px; margin-left:40px;" class="col-6" value=<?php echo './images/'.$employee->getPhoto(); ?> name="uploadfile"  required >
					</div>
	            <div class="">
	            	<button type="submit" name="update" style="width:350px; background-color:#189AB4;" class="  btn btn-primary submit px-3" >Modiffer</button>
	            </div>
				<a href="index.php" style="margin-right:300px ;color: #189AB4 ;">Retourner</a>
	            
	          </form>
				
			
		</div>
	</section>