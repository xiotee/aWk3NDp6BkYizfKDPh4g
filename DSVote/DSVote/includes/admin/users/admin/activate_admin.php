<?php

	include('../../../admin_init.php');
			
	if(isset($_POST['actBtn'])){
		
		$adminID = $_GET['id'];		
			
		$sql= mysql_query( "UPDATE admin SET account_status='Active' WHERE admin_id='$adminID' AND account_status='Deleted'");
				
		$_SESSION['id']=$adminID;
		$_SESSION['status']="Activated";
	
	}else{
		/**do nothing*/
	}

	header("Location: ../../../../admin_users_admin.php");
	
?>