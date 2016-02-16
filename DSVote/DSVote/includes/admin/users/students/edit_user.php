<?php

	include('../../../admin_init.php');
			
	
	if(isset($_GET['Edit'])){
		
		$uId = $_GET['gID'];
		$theIdNum = $_GET['gIDNum'];
		$theLname = ucwords($_GET['glName']);  /*ucwords() - Capitalize first letter in each word*/
		$theFname = ucwords($_GET['gfName']);	
		$theMid = ucwords($_GET['gmInitial']);
		$theCourse = $_GET['gcourse'];	
		$theYear = $_GET['gyear'];	
		$theMobile = $_GET['gmobile'];	
		$theEmail = $_GET['gemail'];
			
		$editsql= mysql_query( "UPDATE user SET id_num='$theIdNum', fname='$theFname', lname='$theLname', minitial='$theMid', course='$theCourse', stud_year='$theYear', mobile='$theMobile', email='$theEmail' WHERE user_id='$uId' AND account_status='Active'");
		
		$_SESSION['user']=$uId;
		$_SESSION['stat']="Change";
		
	}else{
		/*do nothing*/
	}
	
	header("Location: ../../../../admin_users_stud.php");	 

?>