<?php
	include("../../../admin_init.php");
	
	if(isset($_POST['Submit']))
	{
		$idNum =   $_POST['uIdNum'];
		$password =  $_POST['password'];
		$pass =      md5($password);
		$fName =     ucwords($_POST['fName']); /*ucwords() - Capitalize first letter in each word*/
		$lName =     ucwords($_POST['lName']);
		$mInitial =  ucwords($_POST['mInitial']);
		$course =    $_POST['course'];
		$year =      $_POST['year'];
		$mobile =    $_POST['mobile'];
		$email =     $_POST['email'];
				
		$userSql = mysql_query("SELECT id_num FROM user WHERE id_num='$idNum'");
		$studcnt = mysql_num_rows($userSql);
		
		if($studcnt == 0 ){
		
			mysql_query("INSERT INTO user (id_num, password, fname, lname, minitial, course, stud_year, mobile, email, vote_status, account_status)VALUES ('$idNum', '$pass', '$fName', '$lName', '$mInitial', '$course', '$year', '$mobile', '$email', 'Not Voted', 'Active')") or die(mysql_error());
			
			echo $studcnt;
		
		}else{
			
			echo $studcnt;	
		}
		
					  
	}
	

?>	