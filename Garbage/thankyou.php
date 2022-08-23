<?php
session_start();
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
                <li><a href="logout.php">Logout</a></li>
                <li><a style="color:white"  href="#"> <?php echo 'welcome '. $_SESSION['username']?></a><li>
               
                
            </ul>
            <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
            <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>

        </div>
    </nav>
    <header>
        <div class="container header_container">
            <div class="header_left">
                <h1> You order has been Placed </h1>
                <p>We Ensure you best subscription package in your city and give you best price in your Recycalabe Product. Are you want to Explore more</p>
                <a href="welcome.php" class="btn btn-primary">Click Here </a>

            </div>
            <div class="header_right">
                <div  class="header_right-image">
                    <img src="./images/garbage-recycle.svg">
                </div>
            </div>
            
        </div>


    </header>
   
   
    

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