<?php
	
	/*alert for reset application status if id number doesn't exists*/
	if(isset($_SESSION['app_userId'])){
		
		$id=$_SESSION['app_userId'];
		
		if($id == 0){
			
			echo "<div class=' alert alert-error' align='center'> 
					<button data-dismiss='alert' class='close'>×</button>
					<strong> Error! </strong>ID Number doesn't exists. 
				  </div>";
			
		}
		
		unset($_SESSION['app_userId']);
		
	}else{
		
		/*do nothing*/
	}
	
	/*alert for reset vote status if id number doesn't exists*/
	if(isset($_SESSION['vote_userId'])){
		
		$userId=$_SESSION['vote_userId'];
		
		if($userId == 0){
			
			echo "<div class=' alert alert-error' align='center'> 
					<button data-dismiss='alert' class='close'>×</button>
					<strong> Error! </strong>ID Number doesn't exists. 
				  </div>";
			
		}
		
		unset($_SESSION['vote_userId']);
		
	}else{
		
		/*do nothing*/
	}
?>