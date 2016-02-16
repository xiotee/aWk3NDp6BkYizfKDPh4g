<?php
	include("../../admin_init.php");
	
	if(isset($_POST['ApplySubmit'])){
		
		$target_dir ='../../../uploads/applicants/';
		$target_file = $target_dir. basename($_FILES['image']['name']);
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		
		$photo= $_FILES['image']['name'];
		$userPos = 	mysql_escape_string($_POST['position']);
		$userAch =	mysql_escape_string($_POST['achievements']);
			
		if(strcasecmp($imageFileType, "png") == 0 || strcasecmp($imageFileType, "jpg") == 0  || strcasecmp($imageFileType, "jpeg") == 0 ){
			
			if(move_uploaded_file($_FILES['image']['tmp_name'], $target_file))
			{	

				if(empty($userAch)){
					
					mysql_query("INSERT INTO application (user_id, position, image, app_status, app_datetime, achievements, isDelete) VALUES('$user_id', '$userPos', '$photo',  'Pending', now(), ' ', 'false')") or die(mysql_error());
					
				}else{
					
					mysql_query("INSERT INTO application (user_id, position, image, app_status, app_datetime, achievements, isDelete) VALUES('$user_id', '$userPos', '$photo', 'Pending', now(), '$userAch', 'false')") or die(mysql_error());
					
				}
				
				
				mysql_query("UPDATE user SET application_status='Applied' WHERE user_id='$user_id'") or die(mysql_error());
				mysql_query("INSERT INTO logs (user_id, action, log_datetime) VALUES('$user_id', 'sent an application', now())");
				
			}
			
			$_SESSION['imgFileType']=$imageFileType;
				
		}
		else{
			
			$_SESSION['imgFileType']=$imageFileType;
		}
		
	}else{
		/*do nothing*/
	}
	
	header("Location: ../../../user_apply.php");

?>

