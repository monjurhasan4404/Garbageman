<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: Garbage/login.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garbageman</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

</head>
<body>
    <nav>
        <div class="container nav_container">
            <a href="index.php"><h4>Garbageman</h4></a>
            <ul class="nav_menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="Contact.php">Contact</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="search.php">Search</a></li>
                <li><a href="logout.php"> Logout </a></li>
                
            </ul>
            <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
            <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
            <a style="color:white"  href="#"> <?php echo "Welcome ". $_SESSION['username']?></a>

        </div>
    </nav>
    <header>
        <div class="container header_container">
            <div class="header_left">
                <h1> Manage Your Garbage in Advance way.</h1>
                <p>We Ensure you best subscription package in your city and give you best price in your Recycalabe Product.</p>
                <a href="subscribe.php" class="btn btn-primary">Get Started </a>

            </div>
            <div class="header_right">
                <div  class="header_right-image">
                    <img src="./images/garbage-recycle.svg">
                </div>
            </div>
            
        </div>


    </header>
    <section class="categories">
        <div class="container categories_container">
            <div class="categories_left">
                <h1>Our Model</h1>
                <p> We provide Our two basics model one is Subscription model and another one is pricing model</p>
                <a href="about.php"class="btn">Learn More</a>
                <img src="./images/plastic.svg">

            </div>
            <div class="categories_right">
                <article class="category">
                    
                    <h5 style="font-size:20px; margin-bottom:30px"> Subscription Model</h5>
                    <p>Subscribe for manage your garbage from Your door step.And make our environment Clean and Healthy.</p>
                    <a style="margin-top:50px" href="subscribe.php" class="btn btn-primary">Subscribe</a>
                </article>
                <article class="category">
                    
                    <h5 style="font-size:20px; margin-bottom:30px">Pricing Model</h5>
                    <p>If you wish, you can sell us your reusable things. Click on the option below to see the price.</p>
                    <a style="margin-top:50px" href="pricing.php" class="btn btn-primary">See pricing</a>
                </article>
            </div>

        </div>

    </section>
    <section class="services">
        <h2>Our Services</h2>
        <div class="container service_container">
            <article class="service">
                <div class="service_info">
                    <i class="uil uil-servers"></i>
                    <h4>Home Pickup</h4>
                    <p>We pickup your reusable waste from your doorstap</p>

                </div>    
            </article>

            <article class="service">
                <div class="service_info">
                    <i class="uil uil-balance-scale"></i>
                    <h4>Govt certified scale</h4>
                    <p>wighting is done by Govt certified Scale</p>
                </div>    
            </article>
            <article class="service">
                <div class="service_info">
                        <i class="uil uil-dollar-sign-alt"></i>
                        <h4>Instant Cash</h4>
                        <p>Instant Cash with reciept after wighting your recyclable waste</p>
                </div>        
            </article>
            <article class="service">
                <div class="service_info">
                    <i class="uil uil-users-alt"></i>
                    <h4>Customer Friendly</h4>
                    <p>Customer Friendly service is our  main goal.</p>
                </div>
            </article>
        </div>
    </section>
    <section class="locations">
        <div class="container locations_container">
            <div class="location_left">
                <h1>Our Location</h1>
                <p> Our company location are In Bashundhara R/A </p>
                

            </div>
            <div class="location_right">
                <article class="location">
                    <p> Our main goal is to manage your garbage from Your door step.And make our environment Clean and Healthy.</p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.098091885866!2d90.42336791493432!3d23.815110684557446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c64c103a8093%3A0xd660a4f50365294a!2sNorth%20South%20University!5e0!3m2!1sen!2sbd!4v1660142749674!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    
                    
                </article>
            </div>
        </div>
    </section>            

    <footer class="footer">
        <div class="container footer_container">
            <div class="footer_1">
                <a href="index.php"class="footer_logo" ><h4>Garbageman</h4></a>
                <p>Our main target is to make our Environment Clean</p>
                
            </div>
            <div class="footer_2">

                <h4>Permalinks</h4>
                <ul class="permalinks">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="Contact.php">Contact</a></li>
                    <li><a href="about.php">About</a></li>
                </ul>
            </div>
            <div class="footer_3">
                <h4>Primacy</h4>
                <ul class="privacy">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms and conditions</a></li>
                    <li><a href="#">Refund policy</a></li>
                </ul>
            </div>
            <div class="footer_4">
                <h4>Contact Us</h4>
                <div>
                    <p>01823714404</p>
                    <p>Garbageman@gmail.com</p>
                </div>
                <ul class="footer_socials">
                    <li>
                        <a href="#"><i class="uil uil-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="uil uil-instagram-alt"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="uil uil-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="uil uil-linkedin-alt"></i></a>
                    </li>
                </ul>
                
            </div>
            <div class="footer_copyright">
                <small>copyright &copy; Garbageman</small>
            </div>
            <p class="float-right"><a href="#">Back to top</a></p>



        </div>


    </footer>

    

    <script src="./main.js"></script>
    
</body>
</html>