<?php
	
	include('../../admin_init.php');
			
	if(isset($_POST['decline'])){
		
		$userId = $_GET['id'];		
			
		mysql_query( "UPDATE application SET app_status='Denied', app_datetime ='now()' WHERE user_id='$userId' AND app_status='Pending'");
		mysql_query(" UPDATE user SET application_status='Not Applied' WHERE user_id='$userId' AND account_status='Active' ");
		mysql_query( "INSERT INTO logs (admin_id, user_id, action, log_datetime) VALUES('$admin_id', '$userId', 'Application was declined', 'now()') ");  
	
	}else{
		
		/*do nothing*/
	
	}
	
	header("Location: ../../../admin_app_pending.php");
?>