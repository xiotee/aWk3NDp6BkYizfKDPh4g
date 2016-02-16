<?php

	include('../../../admin_init.php');
			
	$userId = $_GET['id'];		
		
	$sql= mysql_query( "UPDATE user SET account_status='Deleted' WHERE user_id='$userId' AND account_status='Active' ");
	
	$_SESSION['user']=$userId;
			
	header("Location: ../../../../admin_users_stud.php");	 


?>