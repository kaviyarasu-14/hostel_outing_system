<?php
    
 $server='localhost';
 $username='root';
 $password='';
 $database='Psg';
 
 $conn=mysqli_connect($server,$username,$password,$database);

 if($conn)
 {
    //  echo "Sucessfully connected to database";
 }
 else{
     echo "Error";
 }
?>