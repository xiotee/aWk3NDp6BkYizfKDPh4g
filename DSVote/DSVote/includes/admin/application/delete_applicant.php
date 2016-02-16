<?php
	
	include('../../admin_init.php');
			
	if(isset($_POST['delApp'])){
		
		$userId = $_GET['id'];
			
		mysql_query( "UPDATE application SET isDelete='true' WHERE user_id='$userId' AND isDelete='false' ");
		mysql_query( "UPDATE user SET application_status='Not Applied' WHERE user_id='$userId' AND account_status='Active' ");
		
	}else{
		
		/*do nothing*/
	
	}
	
	header("Location: ../../../admin_app.php");
?>