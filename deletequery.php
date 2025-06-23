<?php 
include ("dbconn.php");

if(isset($_GET['id'])){

    $deletid=$_GET['id'];
    echo $deletid;

    $sql="delete from query where id=$deletid";
    $result=mysqli_query($conn,$sql);

    if($result){
        header("Location:querydetails.php");

    }else{
        echo "error".$sql."<br>".mysqli_error($conn);
    }


}


?>