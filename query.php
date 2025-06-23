<?php
include("dbconn.php");

$query=$_POST['query'];
$email=$_POST['email'];
// $email=$_POST['email'];
// $password=$_POST['password'];








//echo $fname.$lname.$mnumber.$email.$password;
$sql="Insert into query(query,email)values('$query','$email')";

if(mysqli_query($conn,$sql)){
    header("Location:userinterface.php");
}else{
    echo"Error".$sql."<br>".mysqli_error($conn);

}

?>