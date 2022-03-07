<?php
    include "employeeManager.php";
    $employeeManager = new EmployeeManager();

    if(!empty($_POST)){      
        $cherchInput = $_POST["cherchInput"] ;
        $data = $employeeManager->RechercheParInput($cherchInput);
    }
        else{
			
			$data = $employeeManager->getAllEmployees();
		}



?>
   
   </head>
	<body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="css/style.css">
	
	<nav style="background-color: #012030; height : 100px " class="navbar navbar-dark ">
    <div class="container-fluid">
    <a class="navbar-brand "><img  src="images/PME4.png" style=" max-width:80px " alt="logo"></a>
	
    <form method ="post" class="d-flex">
      <input class="form-control me-2  " type="search" placeholder="Search.." id="myInput" aria-label="Search"name="cherchInput">
	  <input type="submit" class=  "btn btn-info "  value = "Search">
      
    </form>
	

	<div class="nav-item"> 
	<a href="insert.php"  class="btn btn-success " style=>Ajoute</a>
	<a class=" btn btn-Danger" aria-current="page" href="login.php">Déconnexion</a>
	</div>
	

  </div>
    </nav>
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				</div>

				<div class='container mt-5 mb-5 w-100 '>

				<a class="btn btn-info  "  href='index.php'>Home</a>
				</div>
				

				<div class="table100 ver2 m-b-110">
					<table data-vertable="ver2">
						<thead>
							<tr class="row100 head">
							    <th class="column100 column1" data-column="column1">Photo</th>
								<th class="column100 column2">Matricule</th>
								<th class="column100 column3">Nom</th>
								<th class="column100 column4" >Prenom</th>
								<th class="column100 column5" >Date de naissance</th>
								<th class="column100 column6" data-column="column6">Département</th>
								<th class="column100 column7" data-column="column7"> Salaire</th>
								<th class="column100 column8" data-column="column8"> fonction</th>
								<th class="column100 column9" data-column="column9">Action</th>
							</tr>
						</thead>
						<tbody id="myTable" >
						<?php
                          foreach($data as $employee){
                        ?>
							<tr class="row100">
							<td class="column100 column1" data-column="column1"><img  style="max-width:60px ;" src="<?php echo './images/'.$employee->getPhoto()?>"></td>
							    <td class="column100 column2" data-column="column2"><?= $employee->getMatricule()?></td>
								<td class="column100 column3" data-column="column3"><?= $employee->getNom()?></td>
								<td class="column100 column4" data-column="column4"><?= $employee->getPrenom()?></td>
								<td class="column100 column5" data-column="column5"><?= $employee->getdate_de_naissance()?></td>
								<td class="column100 column6" data-column="column6"><?= $employee->getDépartement()?></td>
								<td class="column100 column7" data-column="column7"><?= $employee->getSalaire()?></td>
								<td class="column100 column8" data-column="column8"><?= $employee->getfonction()?></td>
								<td class="column100 column9" data-column="column9" >
							<div class="column71">
							<a href="edit.php?id=<?php echo $employee->getId() ?>" data-tip="edit"><i class="fa fa-edit"></i></a>
							<a href="delete.php?id=<?php echo $employee->getId() ?>" data-tip="delete"><i class="fa fa-trash"></i></a>
								 
							</div>
							      </td>
							</tr>

							<?php }?>
						</tbody>
						
					</table>
				</div>
			</div>
		</div>
	</div>

</body>
</html>

