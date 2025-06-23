

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

<link rel="stylesheet" href="login.css">

</head>
<body>
<?php
if (isset($error)) {
    echo "<p style='color: red;'>$error</p>";
}
?>

<div class="logreg-box"></div>
     <div class="background"></div>
      
  <div class="container">
    <div class="form-box">
       <h1 id="title">SIGN IN</h1>

       <form action="login_check.php" method="POST" >
       
        <div class="input-group">

          

          <div class="input-field">
            <i class="fa-solid fa-envelope" ></i>
            <input type="email" id="email" name="email" placeholder="Email" required>
          </div>

          <div class="input-field">
            <i class="fa-solid fa-lock" ></i>
            <input type="password" name="password" id="password" placeholder="password" required>
          </div>
 
         
          <p>Lost Password <a href="#"> Click Here! </a></p>

        </div>
        <br><br><br><br><br>
      
        <div class="btn-field" id="btnhide"> 
         <button type="submit" id="signinBtn" class="disable" >Sign In</button>&nbsp; &nbsp; 
           
         

           
        </div>
       </form>
      
        
    </div>
     
  
  </div>

</body>
</html>