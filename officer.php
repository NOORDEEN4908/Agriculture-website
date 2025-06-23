<?php
include("dbconn.php");

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$mnumber=$_POST['mnumber'];
$address=$_POST['address'];
$district=$_POST['district'];
$role=$_POST['role'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$password=$_POST['password'];





//echo $fname.$lname.$mnumber.$email.$password;
$sql="Insert into offdetails(firstname,lastname,gender,mobilenumber,address,district,role,dob,email,password)values('$fname','$lname','$gender','$mnumber','$address','$district','$role','$dob','$email','$password')";

if(mysqli_query($conn,$sql)){
    header("Location:admin.php");
}else{
    echo"Error".$sql."<br>".mysqli_error($conn);

}

?>