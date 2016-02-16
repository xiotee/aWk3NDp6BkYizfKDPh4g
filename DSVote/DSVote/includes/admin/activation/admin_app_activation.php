<?php
	include("../../admin_init.php");
	
 
	if(isset($_POST['Activate'])){
		
		mysql_query("INSERT INTO activation (act_type, act_status, act_date, act_time)VALUES('Application', 'Activated', '$cur_date', '$cur_time')");
		mysql_query( "INSERT INTO logs(admin_id, action, log_datetime) VALUES('$admin_id', 'Application process was activated', now()) ");
		
	}
	
	if(isset($_POST['Deactivate'])){
		
		mysql_query("INSERT INTO activation (act_type, act_status, act_date, act_time)VALUES('Application', 'Deactivated', '$cur_date', '$cur_time')");
		mysql_query( "INSERT INTO logs (admin_id, action, log_datetime) VALUES('$admin_id', 'Application process was deactivated', now()) ");  
	
	}
	
	header("Location: ../../../admin_activation.php");
?>