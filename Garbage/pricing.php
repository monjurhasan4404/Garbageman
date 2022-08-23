<?php

session_start();
if(!isset($_SESSION['username'])){
  echo "You are logged out";
  header('location:./login.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>GarbageMan</title>
   
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light ">
  <div class="container-fluid">
    <a class="navbar-brand" href="welcome.php">Garbageman</a>
    <a class="navbar-brand" href="logout.php">Logout</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
      <div>
        <?php 
          $count=0;
          if(isset($_SESSION['cart']))
            {
                $count=count($_SESSION['cart']);
            }
        ?>    
        <a href="mycart.php" class="btn btn-outline-success">My Box(<?php echo $count;?>)</a>
      </div>
    </div>
  </div>
</nav>

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <form action="manage_cart.php" method="POST">
                <div class="card">
                    
                    <div class="card-body">
                        <h5 class="card-title">Plastic</h5>
                        
                        <p class="card-text">price: TK.25/KG</P>
                        <p class="card text">Minimum pick request is 10kg</p>
                        <button type="submit" name="add_to_cart" class="btn btn-info">Add to Cart</button>
                        <input type="hidden" name="Item_Name" value="plastic">
                        <input type="hidden" name="price" value="250">

                    </div>
                </div>
                </form>
            </div>
           
            <div class="col-lg-6">
                <form action="manage_cart.php" method="POST">
                <div class="card">
                   
                    <div class="card-body">
                        <h5 class="card-title"> Auto Battery</h5>
                        <p class="card-text">price: TK.2000/unit</P>
                        <p class="card-text">This price is just Assumption.Actual price depend on product condition</p>
                        <button type="submit" name="add_to_cart" class="btn btn-info">Add to Cart</button>
                        <input type="hidden" name="Item_Name" value="battery">
                        <input type="hidden" name="price" value="2000">

                    </div>
                </div>
                </form>
            </div>
            <div class="col-lg-6">
                <form action="manage_cart.php" method="POST">
                <div class="card">
                    
                    <div class="card-body">
                        <h5 class="card-title">paper</h5>
                        <p class="card-text">price: TK.20/KG</P>
                        <p class="card text">Minimum pick request is 10kg</p>
                        <button type="submit" name="add_to_cart" class="btn btn-info">Add to Cart</button>
                        <input type="hidden" name="Item_Name" value="paper">
                        <input type="hidden" name="price" value="200">

                    </div>
                </div>
                </form >
            </div>
            <div class="col-lg-6">
                <form action="manage_cart.php" method="POST">
                <div class="card">
                    
                    <div class="card-body">
                        <h5 class="card-title">Alumunium Can</h5>
                        <p class="card-text">price: TK.40/KG</P>
                        <p class="card text">Minimum pick request is 10kg</p>
                        <button type="submit" name="add_to_cart" class="btn btn-info">Add to Cart</button>
                        <input type="hidden" name="Item_Name" value="can">
                        <input type="hidden" name="price" value="400">

                    </div>
                </div>
                </form>
            </div>
            <div class="col-lg-6">
                <form action="manage_cart.php" method="POST">
                <div class="card">
                    
                    <div class="card-body">
                        <h5 class="card-title">old laptop</h5>
                        <p class="card-text">price: TK.3000/unit</P>
                        <p class="card-text">This price is just Assumption.Actual price depend on product condition</p>
                        <button type="submit" name="add_to_cart" class="btn btn-info">Add to Cart</button>
                        <input type="hidden" name="Item_Name" value="laptop">
                        <input type="hidden" name="price" value="3000">

                    </div>
                </div>
                </form>
            </div>
        </div>

    </div>

</body>
</html>    