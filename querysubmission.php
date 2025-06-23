<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="qry form\style.css?v=<?php echo time();?>" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="container">
      <span class="big-circle"></span>
      <img src="img/shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          

          <div class="info">
            
            
            <div class="information">
               
            </div>
          </div>

          <div class="social-media">
            
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="query.php" autocomplete="off" method="post">
            <h3 class="title">Contact us</h3>
            
            <div class="input-container">
              <input type="email" name="email" class="input" required>
              <label for="">Email</label>
              <span>Email</span>
            </div>
           
            <div class="input-container textarea">
              <textarea name="query" class="input"required></textarea>
              <label for="query">Message</label>
              <span>Message</span>
            </div>
            <input type="submit" value="Send" class="btn" onclick="showAlert()"/>
          </form>
        </div>
      </div>
    </div>


    <script>
        function showAlert() {
            alert('Our team is working diligently to respond to your query, and you can expect an email shortly.');
        }
    </script>

    <script src="qry form\app.js"></script>
  </body>
</html>
