<?php
	include("../admin_init.php");
	
	if(isset($_POST['savechanges'])){
		
		$oldPass= 		$_POST['oldPass'];
		$newPass= 		$_POST['newPass'];
		$confirmPass=	$_POST['confirmPass'];
		$userOldPass=	md5($oldPass);
		$userNewPass=	md5($newPass);
		
		$sql=mysql_query("SELECT password FROM user WHERE user_id='$user_id' AND account_status='Active' ");
		$row=mysql_fetch_assoc($sql);
		
		/*check if old password match from current password*/
		if(strcmp($userOldPass, $row['password'])==0){ 
			
			/*check if old and new pass does'nt match */
			if( strcmp($oldPass, $newPass)!=0){
				
				/*check if new and confirm password match*/
				if(strcmp($confirmPass, $newPass)==0){ 
					
					mysql_query("UPDATE user SET password='$userNewPass' WHERE user_id='$user_id' AND (password='$userOldPass' AND  account_status='Active') ");
					
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