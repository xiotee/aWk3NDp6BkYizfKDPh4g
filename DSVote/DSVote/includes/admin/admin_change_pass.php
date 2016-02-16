<?php
	include("../admin_init.php");
	
	if(isset($_POST['saveChanges'])){
		
		$oldPass= 		$_POST['oldPass'];
		$newPass= 		$_POST['newPass'];
		$confirmPass=	$_POST['confirmPass'];
		$adminOldPass=	md5($oldPass);
		$adminNewPass=	md5($newPass);
		
		$sql=mysql_query("SELECT password FROM admin WHERE admin_id='$admin_id' AND account_status='Active'");
		$row=mysql_fetch_assoc($sql);
		
		/*check if old password match from current password*/
		if(strcmp($adminOldPass, $row['password'])==0){ 
			
			/*check if old and new pass does'nt match */
			if( strcmp($oldPass, $newPass)!=0){
				
				/*if new and confirm password matched*/
				if(strcmp($confirmPass, $newPass)==0){
				
					mysql_query("UPDATE admin SET password='$adminNewPass' WHERE admin_id='$admin_id' AND password='$adminOldPass' ");
					
					echo "<div class=' alert alert-success' align='center'>	
							<strong>Success! </strong> Password has successfully changed.
						  </div>";
				}else{
					
					echo "<div class=' alert alert-error' align='center'>	
							<strong>Error! </strong> New and Confirm Password doesn't match.
						  </div>";
				}
	
			}else{ 
				
				echo "<div class=' alert alert-error' align='center'>
						<strong>Error! </strong> Old and New Password should not be the same.
					  </div>";
						  
			}
		
		}else{
			
			echo "<div class=' alert alert-error' align='center'>
					<strong>Error! </strong> Password doesn't match the current password.
				  </div>";

			
		}
		
	}else{
		
		/*do nothing*/
		
	}
										
?>