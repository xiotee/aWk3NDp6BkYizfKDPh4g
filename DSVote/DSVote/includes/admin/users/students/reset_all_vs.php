<?php

	include('../../../admin_init.php');
			
	if(isset($_POST['resetVote'])){
		
		$query=mysql_query("SELECT user_id FROM user WHERE vote_status='Voted'");
		
		while($queryRow=mysql_fetch_array($query)){
			
			$id=$queryRow['user_id'];
			
			mysql_query("UPDATE user SET vote_status='Not Voted' WHERE user_id = '$id' AND account_status='Active'");
		}
		
	}else{
		/*do nothing*/
	}
			
	header("Location: ../../../../admin_users_stud.php");	 


?>