<?php

	include('../../admin_init.php');
			
	$theid = $_GET['id'];		
		
	$sql= mysql_query( "UPDATE announcement SET isDelete='true' WHERE announcement_id='$theid' AND isDelete='false'");
			
	$_SESSION['ann']=$theid; 
		  
	header("Location: ../../../admin_ann.php");


?>