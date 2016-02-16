<?php

	/*disable fields if user has applied*/
	$userSql=mysql_query("SELECT * FROM user WHERE user_id='$user_id' AND application_status='Applied'");
	$count= mysql_num_rows($userSql);
											
	if($count != 0){
		echo "<div class=' alert alert-success' >
				You have already sent an application.
			</div>";
		$action= 'disabled';
	}else{
		$action = 'required';
	}
	
	
	
	/*imge file type alert*/
	if(isset($_SESSION['imageFileType'])){
		
		if(strcasecmp($_SESSION['imageFileType'], "png") == 0 || strcasecmp($_SESSION['imageFileType'], "jpg") == 0 
					  || strcasecmp($_SESSION['imageFileType'], "jpeg") == 0){
			
			echo "<div class=' alert alert-error' align='center'> 
					<button data-dismiss='alert' class='close'>×</button>
					<strong>Error!</strong> Only jpeg, jpg, png file types are accepted.
				  </div>";

		}else{
			/*do nothing*/  
		}
		
	}
	
	unset($_SESSION['imageFileType']);
?>

<?php 
	
?>