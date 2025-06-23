<?php
include("dbconn.php");

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$dob=$_POST['dob'];
$address=$_POST['address'];







//echo $fname.$lname.$mnumber.$email.$password;
$sql="Insert into user(name,email,password,dob,address)values('$name','$email','$password','$dob','$address')";

if(mysqli_query($conn,$sql)){
    header("Location:userinterface.php");
}else{
    echo"Error".$sql."<br>".mysqli_error($conn);

}

?>