<?php

	include('../../../admin_init.php');
	
	if(isset($_POST['activeBtn'])){
		
		$userId = $_GET['id'];		
			
		$sql= mysql_query( "UPDATE user SET account_status='Active' WHERE user_id='$userId' AND account_status='Deleted' ");
		
		$_SESSION['user']=$userId;
		$_SESSION['stat']="Activate";
		
	}else{
		/*do nothing*/
	}
			
	header("Location: ../../../../admin_users_stud.php");	 


?>