<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<?php
	include 'employeeManager.php';



    if(!empty($_POST)){
		$employeeManager = new EmployeeManager();
		$ficher = $_FILES["uploadfile"]["name"];
		$employee = new Employee();	
		$employee->setMatricule($_POST['Matricule']);
        $employee->setNom($_POST['Nom']);
        $employee->setPrenom($_POST['Prenom']);
        $employee->setdate_de_naissance($_POST['date_de_naissance']);
		$employee->setDépartement($_POST['Département']);
		$employee->setSalaire($_POST['Salaire']);
		$employee->setFonction($_POST['Fonction']);
		$employee->setPhoto($ficher);
		
       
		$tempname = $_FILES["uploadfile"]["tmp_name"]; 

		$employeeManager->insertEmployee($employee);
		$employeeManager->upload_photo($ficher, $tempname);
     
        header("Location: index.php");


    }
?>


<body >
<nav style="background-color: #012030; height : 100px " class="navbar navbar-dark ">
    <div class="container-fluid">
    <a class="navbar-brand "><img  src="images/PME4.png" style=" max-width:80px " alt="logo"></a>
	
  
	<div class="nav-item"> 
	<a href="index.php"  class="btn btn-success" style=>Retourner</a>
	<a class=" btn btn-Danger" aria-current="page" href="login.php">Déconnexion</a>
	</div>
	

  </div>
    </nav>

			<div class="col-6 " style="margin-left:320px" >
		      	<form action="#" method="POST"  enctype='multipart/form-data' class=""style=" text-align: center;background-color:#012030;border-radius: 16px; margin-top:50px; height: 690px;" >
				  <h2 style="padding-top:30px; color:white">Ajoute les informations</h2>
				  <div class="">
						<input style="width:350px ;margin-top:40px; height: 40px; border-radius: 10px;  border:1px solid" type="text" class=" col-6" name="Matricule" placeholder="Matricule" required>
					</div>
					<div class="">
						<input style="width:350px ;margin-top:20px; height: 40px; border-radius: 10px;  border:1px solid" type="text" class=" col-6" name="Nom" placeholder="Nom" required>
					</div>
					<div class="">
						<input type="text" style="width:350px ;margin-top:20px; height: 40px; border-radius: 10px;border:1px solid" class=" col-6" name="Prenom" placeholder="Prenom" required>
					</div>
					<div class="">
						<input type="date" style="width:350px ;margin-top:20px; height: 40px; border-radius: 10px;border:1px solid" class="col-6 " name="date_de_naissance" placeholder="Date de Naissance" required>
					</div>
					<div>
					        <select class="form-select "required style="width:350px ;margin-top:20px;margin-left:206px; height: 40px; border-radius: 10px;border:1px solid ;" class="col-6"  name="Département"  aria-label="Default select example">
										<option selected>Département...</option>
										<option value="Accounting">Accounting</option>
										<option value="Marketing">Marketing</option>
										<option value="Production">Production</option>
										<option value="I.T">I.T</option>
							</select>
					</div>
                    <div>         
					    <select class="form-select" class="" required="required" name="Fonction" class="col-6" style="width:350px;margin-top:20px;margin-left:207px; height: 40px; border-radius: 10px;border:1px solid" placeholder="Function"  	aria-label="Default select example">
										<option selected>Function...</option>
										<option value="auditor">auditor</option>
										<option value="CFO" >CFO</option>
										<option value="payroll specialist" >payroll specialist</option>
										<option value="tax specialist" >tax specialist</option>
										<option value="advertising manager" >advertising manager</option>
										<option value="brand manager">brand manager</option>
                        </select >     
					</div>		
					
					
					<div class="">
						<input type="number" style="width:350px;margin-top:20px; height: 40px; border-radius: 10px;border:1px solid" class="col-6" name="Salaire" placeholder="Salaire" required>
					</div>
					
					<div class="">
						<input type="file" style="margin-top:20px;margin-bottom:20px; height: 40px; margin-left : 100px" class="col-6" name="uploadfile" placeholder="Photo" value="" required >
					</div>
	            <div class="">
	            	<button type="submit" style="width:350px ;background-color: #189AB4 ;" class="  btn btn-primary submit px-3" >Ajouter</button>
	            </div>
				
	            
	          </form>
				
			
		</div>
	</section>