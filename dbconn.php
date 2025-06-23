<?php
$servername="localhost";
$username="root";
$password="";
$dbname="agriculture";

$conn=new mysqli($servername,$username,$password,$dbname);

try{

    if($conn->connect_error){
        die("connection failed".$conn->connect_error);
    
    }
    else{
    
         echo"connected succesfully";
    }




}
catch(Exception $e){
    echo"Message:".$e->getMessage();
}



?>