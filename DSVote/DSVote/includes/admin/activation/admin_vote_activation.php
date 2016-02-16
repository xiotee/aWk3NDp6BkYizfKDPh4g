<?php
	include("../../admin_init.php");
	
	if(isset($_POST['Activate2'])){
		
		mysql_query("INSERT INTO activation (act_type, act_status, act_date, act_time)VALUES('Votation', 'Activated', '$cur_date', '$cur_time')");
		mysql_query("INSERT INTO logs(admin_id,  action, log_datetime) VALUES('$admin_id', 'Votation process was activated', now())");
		
	}
	
	if(isset($_POST['Deactivate2'])){
		
		mysql_query("INSERT INTO activation (act_type, act_status, act_date, act_time)VALUES('Votation', 'Deactivated', '$cur_date', '$cur_time')");
		mysql_query( "INSERT INTO logs (admin_id, action, log_datetime) VALUES('$admin_id',  'Votation process was deactivated', now())");  
		
	}
	
	
	
	header("Location: ../../../admin_activation.php");
?>