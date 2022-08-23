<?php

session_start();
if(!isset($_SESSION['username'])){
  echo "You are logged out";
  header('location:./login.php');
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Welcome to iCoder. A blog for coding enthusiasts">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/subscribe.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Garbageman</title>


    

    



    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
   
</head>
<body>
    <body>
    <nav>
        <div class="container nav_container">
            <a href="index.php"><h4>Garbageman</h4></a>
            <ul class="nav_menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="Contact.php">Contact</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="Search.php">Search</a></li>
                <li><a href="logout.php"> Logout </a></li>
                
            </ul>
            <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
            <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
           
            

        </div>
    </nav>
    
    
   
    
   


<div style="margin-top:50px" class="container py-3">
  

  <main>
  <form action="manage_cart.php" method="POST">
    <div class="row row-cols-1 row-cols-md-3 mb-3 my-4 text-center">
      
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal"> 1 months</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">৳350<small class="text-muted fw-light">/1mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4" style="color:white">
              <li>Collect From Your Door</li>
              <li>Give Three Different Bag</li>
              <li>Email support</li>
              <li>Help center access</li>
            </ul>
            <button type="submit" name="add_to_cart" class="btn btn-info">Subscribe</button>
            <input type="hidden" name="Item_Name" value="subscribe_1">
            <input type="hidden" name="price" value="350">
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">6 months</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">৳2000<small class="text-muted fw-light">/6mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4" style="color:white">
              <li>Collect From Your Door</li>
              <li>Give Three Different Bag</li>
              <li>Email support</li>
              <li>Help center access</li>
            </ul>
            <button type="submit" name="add_to_cart" class="btn btn-info">Subscribe</button>
            <input type="hidden" name="Item_Name" value="subscribe_6">
            <input type="hidden" name="price" value="2000">
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">12 months</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">৳3800<small class="text-muted fw-light">/1yr</small></h1>
            <ul class="list-unstyled mt-3 mb-4" style="color:white">
              <li>Collect From Your Door</li>
              <li>Give Three Different Bag</li>
              <li>Email support</li>
              <li>Help center access</li>
            </ul>
            <button type="submit" name="add_to_cart" class="btn btn-info">Subscribe</button>
            <input type="hidden" name="Item_Name" value="subscribe_12">
            <input type="hidden" name="price" value="3800">
          </div>
        </div>
      </div>
    
    </div>
    </form>  

    
  </main>

  
</div>
<footer class="container">
  <p class="float-right"><a href="#">Back to top</a></p>
  <p>© 2022-2023 Garbageman, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
</footer>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
  integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
  integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
  integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
  crossorigin="anonymous"></script>


    
  </body>
</html>
