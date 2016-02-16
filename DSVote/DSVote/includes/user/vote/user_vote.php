<?php
	include("../../admin_init.php");
	
	if(isset($_POST['voteSubmit'])){
		
		$position = array('President','Vice President for Internal Affairs','Asst. Vice President for Internal Affairs','Secretary','Vice President for External Affairs','Asst. Vice President for External Affairs','Liason','Vice President for Finance','Asst. Vice President for Finance','Treasurer','Vice President for Information','Asst. Vice President for Information','Public Relations Officer');
		
		foreach( $position as $pos ){
			
			$candidate = $_POST['candidate'][$pos];
			mysql_query("UPDATE candidate SET vote_count= vote_count + 1 WHERE user_id = '$candidate' AND position='$pos'") or die(mysql_error());;
			mysql_query("UPDATE user SET vote_status='Voted' WHERE user_id='$user_id'");
			
		
		}
		
		header("Location: ../../../user_vote.php");
		
	}
?>