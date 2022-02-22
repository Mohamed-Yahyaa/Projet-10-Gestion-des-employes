<?php
   $conn = mysqli_connect('localhost', 'yahya', 'DIXTERMORGEN', 'demo');

   // check connection
 if(!$conn){
      echo 'Connection error: ' . mysqli_connect_error(); 
  }
?>