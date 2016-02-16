
<?php
	include('../../../admin_init.php');
	
	if(isset($_GET['Edit'])){
		
		$adminID = $_GET['id'];
		$adminFname = ucwords($_GET['fname']);
		$adminLname = ucwords($_GET['lname']);
		$adminUname = $_GET['uname'];
			
		$_SESSION['id']=$adminID;
		$_SESSION['status']="Change";

		mysql_query( "UPDATE admin SET fname='$adminFname', lname='$adminLname', username='$adminUname' WHERE admin_id='$adminID'") or die(mysql_error());
		
		header("Location: ../../../../admin_users_admin.php");
		
	}else{
		/*do nothing*/
	} 

?>	