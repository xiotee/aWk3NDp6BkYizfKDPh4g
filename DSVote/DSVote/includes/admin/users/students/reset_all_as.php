<?php

	include('../../../admin_init.php');
			
	if(isset($_POST['resetApp'])){
		
		$appQuery = mysql_query("SELECT user_id FROM user WHERE application_status='Applied'");
		
		while($appRow = mysql_fetch_array($appQuery)){
			
			$appId= $appRow['user_id'];
			
			mysql_query("UPDATE user SET application_status='Not Applied' WHERE user_id = '$appId' AND account_status='Active'");
		}
		
	}else{
		/*do nothing*/
	}
			
	header("Location: ../../../../admin_users_stud.php");	 


?>