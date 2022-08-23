<?php

session_start();
include '../config.php';

if(!isset($_SESSION['username'])){
    echo "You are logged out";
    header('location:./admin_login.php');
}

?>
<html lang = "eng">
	<head>
		<title></title>
		<meta charset = "UTF-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css" />
        <title>Garbageman</title>
        <style>

*{
    margin: 0%;
    padding: 0%;
}

ul {
list-style-type: none;
margin: 10px;
/* padding: 5px; */
overflow: visible;  
/* background-color: rgb(91, 166, 158, 0.1); */
font-weight: bold;
font-family: monospace;
font-size: large;
}

li {
float: left;
border-right: 2px solid black;
border-left: 2px solid black;
padding-left: 5px;
padding-right: 5px;
margin-right: 2%;
text-align: center;
}

li a {
display: block;
color: black;
text-align: center;
padding: 14px 16px;
text-decoration: none;
}

li a:hover:not(.active) {
background-color: black;
color: #f3f3f3;
}

li a.active {
color: white;
background-color: black;
}
</style>

    </head>  

    <body>
      <li><a href="./admin_home.php">Home</a></li>
      <li><a href="./admin_logout.php">Logout</a></li>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                  <table class="table">
                   <thead>
                        <tr>
                        <th scope="col">Order Id</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Phone No</th>
                        <th scope="col">Address</th>
                        <th scope="col">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query="SELECT * FROM `order_manager`";
                        $user_result=mysqli_query($conn,$query);
                        while($user_fetch=mysqli_fetch_assoc($user_result))
                        {
                            echo"
                            <tr>
                        
                                <td>$user_fetch[Order_Id]</td>
                                <td>$user_fetch[Full_Name]</td>
                                <td>$user_fetch[Phone_No]</td>
                                <td>$user_fetch[Address]</td>
                                <td>$user_fetch[description]</td>
                                </tr>
                                ";
                        }

                        ?>
                        
                        
                        
                    </tbody>
                    </table>


                 </div>
            </div>
        </div>    



   </body>
</html>  


