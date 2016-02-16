<?php 
	if(isset($_SESSION['user'])){
		
		$id=$_SESSION['user'];
		$stat=$_SESSION['stat'];
		
		$sql=mysql_query("SELECT account_status FROM user WHERE user_id='$id'");
		$row= mysql_fetch_assoc($sql);
		
		if(strcmp($row['account_status'], 'Active') == 0){
			
			if($stat == "Activate"){
				
				echo "<div class=' alert alert-success' align='center'>
					<button data-dismiss='alert' class='close'>×</button>
					<strong>Success! </strong> User account has been activated.
				  </div>";
				  
			}else{
				
				echo "<div class=' alert alert-success' align='center'>
					<button data-dismiss='alert' class='close'>×</button>
					<strong>Success! </strong> User information has been changed.
				  </div>";
			}
			
		
		}else{
			
			echo "<div class=' alert alert-success' align='center'>
					<button data-dismiss='alert' class='close'>×</button>
					<strong>Success! </strong> User account has been deleted.
				  </div>";
			
		}
		
		unset($_SESSION['user']);
		unset($_SESSION['stat']);
		
	}else{
		
		/*do nothing*/
	}
?>