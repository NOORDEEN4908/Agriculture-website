<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NOORDEEN</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="aboutus.css">
</head>


<body>
    <header class="header">
        <nav class="navbar">
            <a href="http://localhost/New%20folder%20(2)/index.php">HOME</a>
            <a href="http://localhost/New%20folder%20(2)/aboutus.php">Adout_US</a>
            <a href="http://localhost/New%20folder%20(2)/services.php">Services</a>
            <a href="http://localhost/New%20folder%20(2)/contactus.php">Contact_Us</a>
        

        </nav>
        <form action="#" class="search_bar">
            <input type="text" placeholder="search..">
            <button type="submit"><i class="material-icons">search</i></button>

        </form>

    </header>
    <div>
        <div class="background"></div>
        <div class="container">
            <div class="content">
                <h2 class="logo"> <i class='bx bxl-firebase'></i> GreenWorld </h2>

                <div class="text-sci">
                    <h2>wellcome!<br>TO our new GreenWorld.
                        <span></span></h2>

                    
                    

                    <div class="social-Icons">
                        <a href="#"><i class='bx bxl-linkedin' ></i></a>
                        <a href="#"><i class='bx bxl-facebook' ></i></a>
                        <a href="#"><i class='bx bxl-instagram' ></i></a>
                        <a href="#"><i class='bx bxl-twitter' ></i></a>
                    </div>
                </div>
            </div>



        </div>

    </div>






    </article>

    <section id="Contact">

        <div class="contentss">
            <h1>Contact Us</h1>
            
        </div>
        <div class="containerss">
            <div class="contactInfo">
                <div class="boxss">
                    <div class="iconss"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                    <div class="textss">
                        <h3>Address</h3>
                        <p>4671 Sugar Camp Road, <br>Owatonna,Minnesota, <br>55060k</p>
                    </div>
                </div>
                <div class="boxss">
                    <div class="iconss"><i class="fa fa-phone" aria-hidden="true"></i></div>
                    <div class="textss">
                        <h3>Phone</h3>
                        <p>0757194319</p>
                    </div>
                </div>
                <div class="boxss">
                    <div class="iconss"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                    <div class="textss">
                        <h3>email</h3>
                        <p>mohamedanfaz@gmail.com</p>

                    </div>
                </div>
            </div>
            <div class="contactForm">
                <form action="" onsubmit="sendemail(); reset(); return false;">
                    <h2>send Message</h2>
                    <div class="inputBoxss">
                        <input type="text" name="" id="fname" required="required">
                        <span>Full Name</span>
                    </div>
                    <div class="inputBoxss">
                        <input type="email" id="email" required="required">
                        <span>Email</span>
                    </div>
                    <div class="inputBoxss">
                        <textarea required="required" id="help"></textarea>
                        <span>How can i help you</span>
                    </div>
                    <div class="inputBoxss">
                        <input type="submit" name="" value="send">

                    </div>
                </form>
            </div>
        </div>






    </section>




    <footer class="footer">

        <div class="footer-row">
            <div class="footer-col">
                <h4>Info</h4>
                <ul class="links">
                    <li><a href="#" class="active">About Us</a></li>
                    <li><a href="#">Compressions</a></li>
                    <li><a href="#">Customers</a></li>
                    <li><a href="#">Service</a></li>
                    <li><a href="#">Collection</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>Explore</h4>
                <ul class="links">
                    <li><a href="#">Free Designs</a></li>
                    <li><a href="#">Latest Designs</a></li>
                    <li><a href="#">Themes</a></li>
                    <li><a href="#">Popular Designs</a></li>
                    <li><a href="#">Art Skills</a></li>
                    <li><a href="#">New Uploads</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Legal</h4>
                <ul class="links">
                    <li><a href="#">Customer Agreement</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">GDPR</a></li>
                    <li><a href="#">Security</a></li>
                    <li><a href="#">Testimonials</a></li>
                    <li><a href="#">Media Kit</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Newsletter</h4>
                <p>
                    Subscribe to our newsletter for a weekly dose of news, updates, helpful tips, and exclusive offers.
                </p>
                <form action="#">
                    <input type="text" placeholder="Your email" required>
                    <button type="submit">SUBSCRIBE</button>
                </form>
                <div class="icons">
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-linkedin"></i>
                    <i class="fa-brands fa-github"></i>
                </div>
            </div>
        </div>
    </footer>





    <script src="script.js"></script>




    <script>
        let signupBtn = document.getElementById("signupBtn");
        let signinBtn = document.getElementById("signinBtn");
        let nameField = document.getElementById("nameField");
        let title = document.getElementById("title");

        signinBtn.onclick = function() {
            nameField.style.maxHeight = "0";
            title.innerHTML = "Sign In";
            signupBtn.classList.add("disable");
            signinBtn.classList.remove("disable");
        }

        signupBtn.onclick = function() {
            nameField.style.maxHeight = "60px";
            title.innerHTML = "Sign Up";
            signinBtn.classList.add("disable");
            signupBtn.classList.remove("disable");
        }
    </script>
</body>

</html>