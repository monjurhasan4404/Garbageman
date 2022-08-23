<?php
	require_once '../config.php';

	$query = mysqli_query($conn, "SELECT * FROM `users`");

	while($fetch = mysqli_fetch_array($query)){
		
		mysqli_query($conn, "DELETE FROM `users` WHERE `ID` = '$_REQUEST[id]'");			
	}
 
	

	header('location:user.php');
?>