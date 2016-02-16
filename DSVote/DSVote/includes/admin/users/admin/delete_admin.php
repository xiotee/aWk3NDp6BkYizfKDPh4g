<?php

	include('../../../admin_init.php');
			
	if(isset($_POST['delSubmit'])){
		
		$adminID = $_GET['id'];		
			
		$sql= mysql_query( "UPDATE admin SET account_status='Deleted' WHERE admin_id='$adminID' AND account_status='Active'");
				
		$_SESSION['id']=$adminID;
		
		header("Location: ../../../../admin_users_admin.php");
	
	}


?>