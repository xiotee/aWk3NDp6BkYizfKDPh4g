<?php

	include('../../../admin_init.php');
	
	if(isset($_POST['resetAppStat'])){
		
		$appUserId = $_POST['appUserId'];
		
		$appQuery = mysql_query("SELECT * FROM user WHERE id_num='$appUserId' AND account_status='Active'");
		$appCount = mysql_num_rows($appQuery);
		
		if($appCount == 0){
			$_SESSION['app_userId'] = 0;
		}else{
			mysql_query("UPDATE user SET application_status='Not Applied' WHERE id_num = '$appUserId ' AND account_status='Active'");
			$_SESSION['app_userId'] = $appCount;
		}
		

		
	}
	
	if(isset($_POST['resetVoteStat'])){
		
		$voteUserId = $_POST['voteUserId'];
		
		$voteQuery = mysql_query("SELECT * FROM user WHERE id_num='$appUserId' AND account_status='Active'");
		$vCount = mysql_num_rows($voteQuery);
		
		if($vCount == 0){
			$_SESSION['vote_userId'] = 0;
		}else{
			
			mysql_query("UPDATE user SET vote_status='Not Voted' WHERE id_num = '$voteUserId' AND account_status='Active'");
	
			$_SESSION['vote_userId'] = $vCount;
		}
		
		
	}else{
	
	}
			
	header("Location: ../../../../admin_users_stud.php");	 


?>