<?php
	$query=mysql_query("SELECT vote_status FROM user WHERE user_id='$user_id'");
	$row= mysql_fetch_assoc($query);
	$status= $row['vote_status'];
												
	if(strcmp($status, 'Voted') == 0){
		echo "<div class=' alert alert-warning'>
				<label>You have already voted.<label>
			  </div>";
		$action= 'disabled';
	}else{
		$action = 'required';
	}
?>