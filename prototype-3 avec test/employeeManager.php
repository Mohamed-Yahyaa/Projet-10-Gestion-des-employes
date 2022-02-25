<?php
 include 'employee.php';
class GestionEmployee{

    private $Connection = Null;

    private function getConnection(){
      
            $this->Connection = mysqli_connect('localhost', 'yahya', 'DIXTERMORGEN', 'demo');
           
         
       
        
        return $this->Connection;
        
    }
    
    public function Ajouter($employe){

        $firstName = $employe->getfirstName();
        $lastName = $employe->getlastName();
        $Date_of_Birth = $employe->getDate_of_Birth();
        // requête SQL
        $insertRow="INSERT INTO employee(firstName, lastName, Date_of_Birth) 
                                VALUES('$firstName', '$lastName', '$Date_of_Birth')";

        mysqli_query($this->getConnection(), $insertRow);
    }

    

    public function afficher(){
        $SelctRow = 'SELECT id, firstName, lastName, Date_of_Birth FROM employee';
        $query = mysqli_query($this->getConnection() ,$SelctRow);
        $employes_data = mysqli_fetch_all($query, MYSQLI_ASSOC);

        $TableData = array();
        foreach ($employes_data as $value_Data) {
            $employe = new Employee();
            $employe->setId($value_Data['id']);
            $employe->setfirstName($value_Data['firstName']);
            $employe->setlastName ($value_Data['lastName']);
            $employe->setDate_of_Birth ($value_Data['Date_of_Birth']);
            array_push($TableData, $employe);
        }
        return $TableData;
    }


    public function RechercherParId($id){
        $SelectRowId = "SELECT * FROM employee WHERE id= $id";
        $result = mysqli_query($this->getConnection(),  $SelectRowId);
        // Récupère une ligne de résultat sous forme de tableau associatif
        $employe_data = mysqli_fetch_assoc($result);
        $employe = new Employee();
        $employe->setId($employe_data['id']);
        $employe->setfirstName($employe_data['firstName']);
        $employe->setlastName ($employe_data['lastName']);
        $employe->setDate_of_Birth ($employe_data['Date_of_Birth']);
        
        return $employe;
    }

    public function delete($id){
        $RowDelet = "DELETE FROM employee WHERE id= '$id'";
        mysqli_query($this->getConnection(), $RowDelet);
    }

    public function Modifier($id,$firstName,$lastName,$date_of_Birth){
        // Requête SQL
        $RowUpdate = "UPDATE employee SET 
        firstName='$firstName', lastName='$lastName', Date_of_Birth='$date_of_Birth'
        WHERE id=$id";

        mysqli_query($this->getConnection(),$RowUpdate);

    }

}
?>