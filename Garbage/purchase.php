<?php
session_start();
$conn = mysqli_connect("localhost","root","","login");
if(mysqli_connect_error()){
    echo"<script>
    alert('cannot connect');
    window.location.href='mycart.php';
    </script>";
    exit();
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['purchase'])){
        $query1="INSERT INTO `order_manager`(`Full_Name`, `Phone_No`, `Address`,`description`) VALUES ('$_POST[fullname]','$_POST[phone_no]','$_POST[address]','$_POST[description]')";
        if(mysqli_query($conn,$query1));
        {   
            $Order_Id=mysqli_insert_id($conn);
            $query2="INSERT INTO `user_orders`(`Order_Id`, `Item_Name`, `Price`) VALUES (?,?,?)";
            $stmt=mysqli_prepare($conn,$query2);
            if($stmt)
            {
                mysqli_stmt_bind_param($stmt,"isi",$Order_Id,$Item_Name,$Price);
                foreach($_SESSION['cart']as $key => $values)
                {
                    $Item_Name=$values['Item_Name'];
                    $Price=$values['Price'];
                    mysqli_stmt_execute($stmt);
                }
                unset($_SESSION['cart']);
                echo"<script>
                alert('Order Placed');
                window.location.href='thankyou.php';
                </script>";

            }
            else
            {
                echo"<script>
                alert('sql Eroor');
                window.location.href='mycart.php';
                </script>";
            }

        }
        
      }
}
?>