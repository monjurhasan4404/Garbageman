<?php
    session_start();

    if(!isset($_SESSION['username'])){
        echo "You are logged out";
        header('location:./admin_login.php');
    }
	require_once '../config.php';
	if(ISSET($_POST['update_activity'])){
		$title = $_POST['username'];
		
		$start = $_POST['password'];
		

		$pass = password_hash($start, PASSWORD_BCRYPT);
       

		
		header('location:user.php');
	}
?>