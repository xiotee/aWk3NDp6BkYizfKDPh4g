<?php
	
	/*term alert*/
	if($_SESSION['count'] != null){
							
		$count=$_SESSION['count'];
		$year = (" ".$_SESSION['term']." - ".($_SESSION['term']+1)." ");
							
		if($_SESSION['count'] != 0){
			
			echo "<div class=' alert alert-error' align='center'> 
					<button data-dismiss='alert' class='close'>×</button>
					$year term already exists. 
				  </div>";
			
		}
	}
	
	unset($_SESSION['count']);
	
	/*imge file type alert*/
	if(isset($_SESSION['imgType'])){
		
		if(strcasecmp($_SESSION['imgType'] , "png") == 0 || strcasecmp($_SESSION['imgType'] , "jpg") == 0  || strcasecmp($_SESSION['imgType'] , "jpeg") == 0){
			
			echo "<div class=' alert alert-success' align='center'> 
					<button data-dismiss='alert' class='close'>×</button>
					<strong>Success!</strong> Officer information has been edited.
				  </div>";

		}else{
			
			echo "<div class=' alert alert-error' align='center'> 
					<button data-dismiss='alert' class='close'>×</button>
					<strong>Error!</strong> Only jpeg, jpg, png file types are accepted.
				  </div>";
				  
		}
		
	}
	
	unset($_SESSION['imgType']);
?>