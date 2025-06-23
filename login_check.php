<?php
include("dbconn.php");  
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

  
    $sqlAdmin = "SELECT email, password FROM admin WHERE email='$email' AND password='$password'";
    $sqlOffDetails = "SELECT email, password FROM offdetails WHERE email='$email' AND password='$password'";
    $sqlUser = "SELECT email, password FROM user WHERE email='$email' AND password='$password'";
    
    $resultAdmin = $conn->query($sqlAdmin);
    $resultOffDetails = $conn->query($sqlOffDetails);
    $resultUser = $conn->query($sqlUser);

    if ($resultAdmin->num_rows > 0) {
        
        header("Location: admin.php");
    } elseif ($resultOffDetails->num_rows > 0) {
     
        header("Location: offuser.php");
    } elseif ($resultUser->num_rows > 0) {
    
        header("Location:userinterface.php ");
    } else { 
      
       header("Location:signin.php.");

       
    }
}

 
$conn->close();
?>
 

 