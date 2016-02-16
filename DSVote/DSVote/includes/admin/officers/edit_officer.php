<?php 
	include("../../admin_init.php");
	
	if(isset($_POST['submitBtn'])){
		
		$off_id = $_POST['id'];
		$term = $_POST['term'];
		
		$dir ='../../../uploads/officers/';
		$file = $dir. basename($_FILES['photo']['name']);
		$imageType = pathinfo($file,PATHINFO_EXTENSION);
		
		$officerPhoto = $_FILES['photo']['name'];
		$officerIdNum = $_POST['idNumber'];
		
		/*Query user_id based on id number entered*/
		$sql = mysql_query("SELECT user_id FROM user WHERE id_num='$officerIdNum'");
		$row = mysql_fetch_assoc($sql);
		$userId = $row['user_id'];
		
		
		if(empty($officerPhoto) && !empty($officerIdNum)){ /*if photo is empty and id number is not empty*/
			
			mysql_query("UPDATE officer SET user_id='$userId' WHERE officer_id = '$off_id'") or die(mysql_error());
		
		}else if (!empty($officerPhoto) && !empty($officerIdNum)){ /*if both photo and id number are not empty*/
			
			if(strcasecmp($imageType, "png") == 0 || strcasecmp($imageType, "jpg") == 0  || strcasecmp($imageType, "jpeg") == 0 ){
			
				if(move_uploaded_file($_FILES['photo']['tmp_name'], $file))
				{
					mysql_query("UPDATE officer SET user_id='$userId', image='$officerPhoto' WHERE officer_id = '$off_id'") or die(mysql_error());
					
				}else{
					/*do nothing*/
				}
				
				$_SESSION['imgType']=$imageType;
				
			}else{ 
			
				$_SESSION['imgType']=$imageType;

			}
			
		}else{
			
		}
		
		header("Location: ../../../admin_officers.php?term=$term");
		
	}

?>