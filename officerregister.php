<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <link rel="stylesheet" type="text/css" href="PHP Form\registration.css">

     

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

   <title>Officer Regisration Form </title>
</head>
<body>
    <div class="container">
        <header>Registration</header>

        <form action="officer.php"  method="post">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label for="fname">First Name</label>
                            <input type="text" id="fname"  name="fname"   required placeholder="Enter first name" pattern="^[A-Z]\w*$"  oninvalid="this.setCustomValidity('Please make first letter of your name as capital')" onchange="try{setCustomValidity('')}catch(e){}">
                        </div>

                        <div class="input-field">
                            <label for="dob">Date of Birth</label>
                            <input type="date"   id="dob" name="dob"  required   placeholder="Enter birth date" min="1900-01-01" max="2010-12-31">
                        </div>

                        <div class="input-field">
                            <label for="mnumber">Mobile Number</label>
                            <input type="text"  id="mnumber" name="mnumber"  placeholder="Enter your Mobile Number" required>
                        </div>

                        <div class="input-field">
                            <label for="lname">Last name</label>
                            <input type="text"   id="lname" name="lname"   required placeholder="Enter last name" pattern="^[A-Z]\w*$"  oninvalid="this.setCustomValidity('Please make first letter of your name as capital')" onchange="try{setCustomValidity('')}catch(e){}">
                        </div>

                        <div class="input-field">
                            <label for="gender">Gender</label>
                            <select id="gender" name="gender" required  >
                                <option disabled selected >Select gender</option>
                                <option >Male</option>
                                <option >Female</option>
                                <option >Others</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label for="role">Role</label>
                            <input type="text"   id="role" name="role"  placeholder="Role" required>
                        </div>
                    </div>
                </div>

                <div class="details ID">
                

                    <div class="fields">
                        <div class="input-field">
                            <label for="address">Address</label>
                            <input type="text"   id="address" name="address"  placeholder="Enter your Address" required>
                        </div>

                        <div class="input-field">
                            <label for="district">District</label>
                            <input type="number"   id="district"   name="district"  placeholder="District" required>
                        </div>

                        <div class="input-field">
                            <label for="email" >Email</label>
                            <input type="email"   id="email"  name="email" placeholder="Enter email address"  required oninvalid="this.setCustomValidity('Please give valid format, like @yahoo.com or @gmail.com, etc,.')" onchange="try{setCustomValidity('')}catch(e){}">
                        </div>

                        <div class="input-field">
                            <label for="password">Password</label>
                            <input type="password"   id="password" name="password"    placeholder="Enter new password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                        </div>

                        <div class="input-field">
            <i class="fa-solid fa-lock" ></i>
            <input type="password" name="psw-repeat" id="psw-repeat" placeholder="Repeat your password" required>
          </div>


                 
                </div> 
            </div>

                    <div class="buttons">
                        <div class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText"><a href="http://localhost/New%20folder%20(2)/admin.php">BACK</a></span>

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
    <script>
var password = document.getElementById("password")
  , confirm_password = document.getElementById("psw-repeat");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
  </script>

    <script src="script.js"></script>
</body>
</html>
