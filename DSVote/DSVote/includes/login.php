

<?php
	include('database/connect.php');

	session_start(); // Starting Session

	$error=''; // Variable To Store Error Message

	if(isset($_POST['login'])){
		
		$user = 	mysql_escape_string($_POST['username']);
		$pass = 	mysql_escape_string($_POST['password']);
				
		if(substr($user, 0, 5) == "admin"){
					 
			$query = 	mysql_query("SELECT * FROM admin where `username` = '$user' AND account_status='Active'");// or die(mysql_error("Error"));
			$userdata = mysql_fetch_assoc($query);
			
			if(mysql_num_rows($query) > 0){
				
				if($userdata['password'] == md5($pass)){
					
					$_SESSION['id_number'] = $user;
					$_SESSION['admin_id'] = $userdata['admin_id'];
					header("Location: admin_ann.php");	
				
				}else{
					echo "<div class=' alert alert-error' align='center'>";
						echo "<strong>Error!</strong> Wrong password. Please try again."; 
					echo "</div>";	
				}
			
			}else{	
				echo "<div class='alert alert-error' align='center'>";
					echo "<strong>Error!</strong> That username doesn't exist. Please try again.";
				echo "</div>";
			} 
			 	
		}else{
			
			$query = 	mysql_query("SELECT * FROM user where `id_num` = '$user' AND account_status='Active'");// or die(mysql_error("Error"));
			$userdata = mysql_fetch_assoc($query);
			
			if(mysql_num_rows($query) > 0){
				
				$check = $userdata['password'];
		
				if($userdata['password'] == md5($pass)){
					
					$_SESSION['idnum'] = $userdata['id_num'];
					$_SESSION['user_id'] = $userdata['user_id'];
					header("Location: user_ann.php");	
				
				}else{
					echo "<div class='alert alert-error' align='center'>";
						echo "<strong>Error!</strong> Wrong password. Please try again.";
					echo "</div>";	
				}
				
			}else{	
				echo "<div class='alert alert-error' align='center'>";
					echo "<strong>Error!</strong> That username doesn't exist. Please try again.";
				echo "</div>";	
			} 
		
		}
				
	}
			
?>
