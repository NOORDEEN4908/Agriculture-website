<?php
include("dbconn.php");

// Include your database connection file (dbconn.php) here

if (isset($_GET['id'])) {
    $updateid = $_GET['id'];
    // Fetch user data based on the provided ID
    $query = "SELECT * FROM user WHERE id = $updateid";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    if (!$row) {
        // Handle the case where the user with the given ID doesn't exist
        die("User not found.");
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
    $newName = $_POST['name'];  
    $newEmail = $_POST['email'];
    $newPassword = $_POST['password'];
    $newDOB = $_POST['dob'];
    $newAddress = $_POST['address'];
 
    $updateQuery = "UPDATE user SET 
                    name = '$newName',
                    email = '$newEmail',
                    password = '$newPassword',
                    dob = '$newDOB',
                    address = '$newAddress'
                    WHERE id = $updateid";

    if (mysqli_query($conn, $updateQuery)) {
      
        header("Location:offuser.php");
         
    } else {
        echo "Error updating user data: " . mysqli_error($conn);
    }
}
?>
