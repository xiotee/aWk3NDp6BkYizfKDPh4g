<?php
	
	include("../../admin_init.php");
	
	$candStatus = $_GET['stat'];
	$id = $_GET['id'];
	$term = $_GET['term'];
	
	if($candStatus == 'Not Winner'){
		mysql_query("UPDATE candidate SET status='Winner' WHERE candidate_id='$id' AND status='$candStatus' AND vote_count!=0");
	}else{
		mysql_query("UPDATE candidate SET status='Not Winner' WHERE candidate_id='$id' AND status='$candStatus' AND vote_count!=0");
	}
	
	header("Location: ../../../admin_results.php?resTerm=$term");
	
?>