<?php

include("dbconn.php");

if(isset($_GET['id']))
    $updateid=$_GET['id'];
    echo $updateid;



?><!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="PHP Form\registration.css?v=<?php echo time();?>">
     

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

   <title>Officer Regisration Form </title>
</head>
<body>


<?php
    $query="select * from offdetails where id=$updateid";
    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_assoc($result);
    
    ?>

    <div class="container">
        <header>Registration</header>

        <form action="updatedb.php?id=<?php echo $row['id'] ;?>"  method="post">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label for="fname">First Name</label>
                            <input type="text" id="fname"  name="fname"   placeholder="Enter your First name" value="<?php echo $row ['firstname']; ?>">
                        </div>

                        <div class="input-field">
                            <label for="dob">Date of Birth</label>
                            <input type="date"   id="dob" name="dob"     placeholder="Enter birth date" value="<?php echo $row ['dob']; ?>">
                        </div>

                        <div class="input-field">
                            <label for="mnumber">Mobile Number</label>
                            <input type="text"  id="mnumber" name="mnumber"  placeholder="Enter your Mobile Number" value="<?php echo $row ['mobilenumber']; ?>">
                        </div>

                        <div class="input-field">
                            <label for="lname">Last name</label>
                            <input type="text"   id="lname" name="lname"   placeholder="Enter your Last Name" value="<?php echo $row ['lastname']; ?>">
                        </div>

                        <div class="input-field" id="gender">
                            <label for="gender">Gender</label>
                            <select id="gender" name="gender" value="<?php echo $row ['gender']; ?>"  >
                                <option disabled selected >Select gender</option>
                                <option value="Male" <?php if ($row['gender'] === 'Male') echo 'selected'; ?>>Male</option>
                                <option value="Female" <?php if ($row['gender'] === 'Female') echo 'selected'; ?>>Female</option>
                                <option value="Others" <?php if ($row['gender'] === 'Others') echo 'selected'; ?>>Others</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label for="role">Role</label>
                            <input type="text"   id="role" name="role"  placeholder="Role" value="<?php echo $row ['role']; ?>">
                        </div>
                    </div>
                </div>

                <div class="details ID">
                

                    <div class="fields">
                        <div class="input-field">
                            <label for="address">Address</label>
                            <input type="text"   id="address" name="address"  placeholder="Enter your Address" value="<?php echo $row ['address']; ?>">
                        </div>

                        <div class="input-field">
                            <label for="district">District</label>
                            <input type="number"   id="district"   name="district"  placeholder="District" value="<?php echo $row ['district']; ?>">
                        </div>

                        <div class="input-field">
                            <label for="email" >Email</label>
                            <input type="email"   id="email"  name="email" placeholder="Enter your Email" value="<?php echo $row ['email']; ?>">
                        </div>

                        <div class="input-field">
                            <label for="password">Password</label>
                            <input type="password"   id="password" name="password"   placeholder="Password" value="<?php echo $row ['password']; ?>">
                        </div>

                     
                </div> 
            </div>

                    <div class="buttons">
                        <div class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <a href="admin.php"><span class="btnText"> </span>Back</a>
                        </div>
                        
                        <button class="sumbit">
                            <span class="btnText">Submit</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </div> 
            </div>
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>