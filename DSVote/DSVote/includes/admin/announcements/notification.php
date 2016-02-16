<?php 

	
	if(isset($_SESSION['adminId'])){
		
		echo "<div class=' alert alert-success' align='center'>
					<button data-dismiss='alert' class='close'>×</button>
					<label>Announcement has been successfully added!</label>
				  </div>";
				  
	}
	unset($_SESSION['adminId']);
	
	
	if(isset($_SESSION['ann'])){
		
		$id=$_SESSION['ann'];
		
		$sql=mysql_query("SELECT isDelete FROM announcement WHERE announcement_id='$id'");
		$row= mysql_fetch_assoc($sql);
		
		if(strcmp($row['isDelete'], 'false') == 0){
			
			echo "<div class='alert alert-success' align='center'>
					<button data-dismiss='alert' class='close'>×</button>
					<label>Announcement has been successfully changed!</label>
				  </div>";
		
		}else{
			
			echo "<div class=' alert alert-success' align='center'>
					<button data-dismiss='alert' class='close'>×</button>
					<label>Announcement has been successfully deleted!</label>
				  </div>";
			
		}
		
		unset($_SESSION['ann']);
	}else{
		
		/*do nothing*/
	}
	
?>