<?php
	
	include("../../admin_init.php");
	
	echo $candStatus = $_GET['stat'];
	echo $id = $_GET['id'];
	
	if($candStatus == 'Not Winner'){
		mysql_query("UPDATE candidate SET status='Winner' WHERE candidate_id='$id' AND status='$candStatus'");
	}else{
		mysql_query("UPDATE candidate SET status='Not Winner' WHERE candidate_id='$id' AND status='$candStatus'");
	}
	
	header("Location: ../../../admin_results.php");
	
?>