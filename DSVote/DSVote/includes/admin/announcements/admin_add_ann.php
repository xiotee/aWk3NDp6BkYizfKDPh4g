 <?php
	include('../../admin_init.php');
	
	
	if(isset($_POST['Submit'])){
										 
		$title = 	mysql_escape_string($_POST['title']);
		$content = 	mysql_escape_string($_POST['content']);
								 
		$sql = mysql_query("INSERT INTO announcement (admin_id, title, content, ann_date, isDelete) VALUES ('$admin_id', '$title', '$content', '$timestamp', 'false')") or die(mysql_error());
		
		$annSql = mysql_query("SELECT admin_id FROM announcement ORDER BY admin_id DESC LIMIT 1");
		$adminRow = mysql_fetch_assoc($annSql);
		echo $_SESSION['adminId'] = $adminRow['admin_id'];
		
		header("Location: ../../../admin_ann.php");
		
		
								 
	}else{
		
		/*do nothing*/
	}
	
	
?>	
								 
								
							 