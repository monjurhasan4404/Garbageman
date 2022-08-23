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
        <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garbageman</title>
   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <title>GarbageMan</title>

        <style>

*{
    margin:0;
    padding:0;
    border:0;
    outline:0;
    text-decoration:none;
    list-style:none;
    box-sizing:border-box;
}



.container{
    width:76%;
    margin:0 auto;

}
          .nav_container{
    height: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
nav button{
    display:none;

}
.nav_menu{
    display:flex;
    align-items:center;
    gap: 4rem;

}
.nav_menu a{
    font-size: 0.9rem;
    transition: all 400ms ease;
}
.nav_menu a:hover{
    color:#2e3267;
}


          </style>
   
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
           

        </div>
    </nav>
   <div class="container">
    <div class="row">
        <div class="col-lg-12 text-center border rounded bg-light my-5">
             <h2>Your total Items and Tolal approximate Amount </h2>
        </div>
        <div class= "col-lg-8">
            <table class="table">
                  <thead>
                    <tr>
                        <th scope="col"> Serial NO</th>
                        <th scope="col"> Item_Name</th>
                        <th scope="col">  price</th>
                        
                        
                        <th scope="col"></th>
                    </tr>
                  </thead>    
                    <tbody>
                        <?php 
                          $total=0;
                         if(isset($_SESSION['cart']))
                         {
                            foreach($_SESSION['cart'] as $key => $value)
                            {   $sr=$key+1;
                                $total=$total+$value['price'];
                                echo"
                                  <tr>
                                  <td>$sr</td>
                                  <td>$value[Item_Name]</td>
                                  <td>$value[price]<input type='hidden' class='iprice' value='$value[price]'</td>
                                  
                                  
                                  <td>
                                    <form action='manage_cart.php' method='POST'>
                                      <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button></td>
                                      <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                    </form>
                                  </td> 
                                  
                                 </tr>
                                 "; 
                                 
                            }

                        }  
                      ?>
                    </tbody>

            </table>     

        </div>
        <div class="col-lg-4">
          <div class="border bg-light rounded p-4">
            <h4> Total:<h4>
            <h5 class="text-right"><?php echo $total?></h5>
            <br>
            <?php
            if(isset($_SESSION['cart'])&& count($_SESSION['cart'])>0)
            {
              ?>
            <form action="purchase.php" method="POST">
              <div class="form-group">
               <label  >Full name</label>
               <input type="text" name="fullname" class="form-control" required >
               
              </div>
              <div class="form-group">
               <label  >Phone Number</label>
               <input type="number" name="phone_no"class="form-control" required >
               
              </div>
              <div class="form-group">
               <label  >Full address</label>
               <input type="text"name="address"  class="form-control" required >
               
              </div>
              <div class="form-group">
               <label  >Item Description</label>
               <input type="text"name="description"  class="form-control" required >
               
              </div>
              
              <button class="btn btn-primary btn-block" name="purchase">Send a Request</button>
            </form>  
            <?php 
            }
            ?>
          </div>  
        </div>    

     

    </div>

</div> 


    


</body>
</html>
