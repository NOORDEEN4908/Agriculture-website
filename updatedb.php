<?php

include("dbconn.php");

if(isset($_GET['id'])){
    $updateid=$_GET['id'];
    //echo $updateid;

    $fname=$_REQUEST['fname'];
    $lname=$_REQUEST['lname'];
    $gender=$_REQUEST['gender'];
    $mnumber=$_REQUEST['mnumber'];
    $address=$_REQUEST['address'];
    $district=$_REQUEST['district'];
    $role=$_REQUEST['role'];
    $dob=$_REQUEST['dob'];
    $email=$_REQUEST['email'];
    $password=$_REQUEST['password'];

   echo $fname.$lname.$gender.$mnumber.$address.$district.$role.$dob.$email.$password;
   
   $sql="UPDATE offdetails SET id='$updateid',firstname='$fname',lastname='$lname',gender='$gender',mobilenumber='$mnumber',address='$address',district='$district',role='$role',dob='$dob',email='$email',password='$password' WHERE id='$updateid'";
   $result=mysqli_query($conn,$sql);

   if($result)
    {
        header("Location:admin.php");
    }
    else
    {
        echo "Error".$sql."<br>".mysqli_error($conn);
    }


}

?>