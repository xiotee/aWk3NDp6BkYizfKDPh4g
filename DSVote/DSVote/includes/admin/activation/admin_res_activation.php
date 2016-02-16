<?php
	include("../../admin_init.php");
	
	if(isset($_POST['Activate3'])){
		
		mysql_query("INSERT INTO activation (act_type, act_status, act_date, act_time)VALUES('Results', 'Activated', '$cur_date', '$cur_time')");
		mysql_query( "INSERT INTO logs(admin_id, action, log_datetime) VALUES('$admin_id', 'Result process was activated', now()) ");
		
	}
	
	if(isset($_POST['Deactivate3'])){
		
		mysql_query("INSERT INTO activation (act_type, act_status, act_date, act_time)VALUES('Results', 'Deactivated', '$cur_date', '$cur_time')");
		mysql_query( "INSERT INTO logs(admin_id, action, log_datetime) VALUES('$admin_id', 'Result process was deactivated', now()) ");
		
	}
	
	
	
	header("Location: ../../../admin_activation.php");
?>