<?php 
	if(isset($_SESSION['id'])){
		
		$id=$_SESSION['id'];
		$status = $_SESSION['status'];
		
		$adminsql=mysql_query("SELECT account_status FROM admin WHERE admin_id='$id'");
		$row= mysql_fetch_assoc($adminsql);
		
		if($row['account_status']=='Active'){
			
			if($status == "Activated"){
				
				echo "<div class=' alert alert-success' align='center'>
						<button data-dismiss='alert' class='close'>×</button>
						<strong>Success! </strong> User account has been activated.
					  </div>";
					  
			}else{
				
				echo "<div class=' alert alert-success' align='center'>
						<button data-dismiss='alert' class='close'>×</button>
						<strong>Success! </strong> User info has been changed.
					  </div>";
					  
			}
		
		}else{
			
			echo "<div class=' alert alert-success' align='center'>
					<button data-dismiss='alert' class='close'>×</button>
					<strong>Success! </strong> User account has been deleted.
				  </div>";
			
		}
		
		unset($_SESSION['id']);
		unset($_SESSION['status']);
		
	}else{
		
		/*do nothing*/
	}
?>