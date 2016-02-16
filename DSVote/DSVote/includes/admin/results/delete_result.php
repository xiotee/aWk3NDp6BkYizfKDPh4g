<?php
	
	include('../../admin_init.php');
			
	if(isset($_POST['delRes'])){
		
		$getTerm = $_GET['term'];
			
		mysql_query( "UPDATE candidate SET isDelete='true' WHERE term_start='$getTerm' AND isDelete='false' ");
		
		$sql = mysql_query("SELECT term_start FROM candidate WHERE isDelete='false' ORDER BY candidate_id DESC LIMIT 1");
		$row = mysql_fetch_assoc($sql);
		$term = $row['term_start'];
		
		$header=(mysql_num_rows($sql) == 0)?"admin_results.php": "admin_results.php?resTerm=$term";

		
	}else{
		
		/*do nothing*/
	
	}
	
	header("Location: ../../../$header");
?>