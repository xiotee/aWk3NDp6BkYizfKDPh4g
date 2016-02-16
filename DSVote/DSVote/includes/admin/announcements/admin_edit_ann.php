<?php

	include('../../admin_init.php');		
	
	
	if(isset($_POST['Edit'])){
		
		$theid = $_POST['gID'];
		$thetitle = mysql_escape_string($_POST['gtitle']);	
		$thecontent = mysql_escape_string($_POST['gcontent']);	
		
		$sql= mysql_query( "UPDATE announcement SET title='$thetitle', content='$thecontent', ann_date='$timestamp' WHERE announcement_id='$theid' AND isDelete='false'");

		$_SESSION['ann']=$theid;
			
	}else{
		
		/*do nothing*/
	}
	
	header("Location: ../../../admin_ann.php");
?>