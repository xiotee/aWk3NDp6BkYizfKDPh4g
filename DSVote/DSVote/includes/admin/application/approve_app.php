<?php
	
	include('../../admin_init.php');
			
	if(isset($_POST['approve'])){
		
		echo $userId = $_GET['id'];		
		echo $pos = $_GET['pos'];
			
		mysql_query( "UPDATE application SET app_status='Accepted', app_datetime = now() WHERE user_id='$userId' AND app_status='Pending'");
		mysql_query(" UPDATE user SET application_status='Applied WHERE user_id='$user_id' AND account_status='Active' ");
		mysql_query( "INSERT INTO logs (admin_id, user_id, action, log_datetime) VALUES('$admin_id', '$userId', 'Application was approved', now()) "); 
		
		$query=mysql_query("SELECT image FROM application WHERE user_id='$userId'");
		$app = mysql_fetch_assoc($query);
		echo $image = mysql_escape_string($app['image']);
		
		mysql_query( "INSERT INTO candidate (user_id, image, position, vote_count, status, term_start, term_end, isDelete) VALUES('$userId', '$image', '$pos', '0', 'Not Winner', year(now()), year(now())+1, 'false') ");  		
	
	}else{
		
		/*do nothing*/
	
	}
	
	header("Location: ../../../admin_app_pending.php");
?>