<?php 

   if(isset($_GET['id'])){
       $data = json_decode(file_get_contents('people.json'));

       foreach($data as $value){
           if($value[0]== $_GET['id']){
               $editPerson = $value ;
               break;
           }
       }
   }
   if( !empty($_POST)){
       $id = uniqid(false);
       $fname  = $_POST['fname'];
       $lname  = $_POST['lname'];
       $age    = $_POST['age'];
       $gender = $_POST['gender'];
       $editPerson = array($id, $fname, $lname, $age, $gender); 
     
       $file = file_get_contents('people.json');
       $data = json_decode($file);

       for($i = 0; $i < count($data); $i++){
           if($data[$i][0]== $_GET['id']){
               $data[$i] = $editPerson;
               
           }
       }
       file_put_contents('people.json', json_encode($data));
       header("location: index.php");
            
   }

?>

<div>
        <div>
		<div><h3>Create a User</h3>
        <form method="post" action="">
			<div>
				<label for="inputFName">First Name</label>
				<input type="text" required id="inputfname" value=<?= $editPerson[1]?> name="fname" placeholder="fname">
				<span></span>
			</div>
			
			<div>
				<label for="inputLName">Last Name</label>
				<input type="text" required id="inputlname" value=<?= $editPerson[2]?> name="lname" placeholder="lname">
        		<span></span>
			</div>
			
			<div>
				<label for="inputAge">Age</label>
				<input type="text" required id="inputage" value=<?= $editPerson[3]?> name="age" placeholder="age">
				<span></span>
			</div>
				<div class="form-group">
					<label for="inputGender">Gender</label>
					<select class="form-control" required="required"  name="gender" >
						<option>Please Select</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
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