

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

<link rel="stylesheet" href="loginstyle.css">

</head>
<body>
 
     <?php
     if (isset($login_error)) {
         echo "<p style='color: red;'>$login_error</p>";
     }
     ?>
       <div class="logreg-box"></div>
     <div class="background"></div>
  <div class="container">
    <div class="form-box">
       <h1 id="title">SIGNUP</h1>

       
       <form action="user.php" method="POST">
        <div class="input-group">

          <div class="input-field" id="nameField" >
            <i class="fa-solid fa-user" ></i>
            <input type="text" id="name" name="name" required placeholder="Enter first name" pattern="^[A-Z]\w*$"  oninvalid="this.setCustomValidity('Please make first letter of your name as capital')" onchange="try{setCustomValidity('')}catch(e){}">
          </div>

          <div class="input-field">
            <i class="fa-solid fa-envelope" ></i>
            <input type="email" id="email" name="email" placeholder="Enter email address"  required oninvalid="this.setCustomValidity('Please give valid format, like @yahoo.com or @gmail.com, etc,.')" onchange="try{setCustomValidity('')}catch(e){}">
          </div>

          <div class="input-field">
            <i class="fa-solid fa-lock" ></i>
            <input type="password" name="password" id="password" placeholder="Enter new password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
          </div>
          
          <div class="input-field">
            <i class="fa-solid fa-lock" ></i>
            <input type="password" name="psw-repeat" id="psw-repeat" placeholder="Repeat your password" required>
          </div>
        

          <div class="input-field"  id="bField" >
            <i class="fa-solid fa-birthday-cake" ></i>
            <input type="date" name="dob" id="dob" min="1900-01-01" max="2010-12-31">
          </div>

          <div class="input-field" id="aField">
            <i class="fa-solid fa-address-book" ></i>
            <input type="text" name="address" id="address" placeholder="Enter address"  required>
          </div>

          <p>Lost Password <a href="#"> Click Here! </a></p>

        </div>
        <br><br><br><br><br><br><br><br><br>
      
        <div class="btn-field" id="btnhide">
      
          <button type="submit" id="signupBtn"  >Sign Up</button>
         
    </div>
          
        </div>
       </form>
    </div>
        
    </div>
    <!-- <form action="login_check.php" method="POST"><button type="submit" id="signinBtn" class="disable">Sign In</button></form> -->
  
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

  
</body>
</html>