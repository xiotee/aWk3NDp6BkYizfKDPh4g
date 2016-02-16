<?php
	include("../../../admin_init.php");

	if(isset($_POST['submit'])){
		
		$fName =     ucwords($_POST['fName']); /*ucwords() - Capitalize first letter in each word*/
		$lName =     ucwords($_POST['lName']);
		$uname =   	 $_POST['uname'];
		$password =  $_POST['password'];
		$pass =      md5($password);
		
		
		$adminSql = mysql_query("SELECT username FROM admin WHERE username ='$uname'");
		$cnt = mysql_num_rows($adminSql);
		
		if($cnt == 0 ){
			
			mysql_query("INSERT INTO admin( fname, lname, username, password, account_status)VALUES ('$fName', '$lName', '$uname', '$pass', 'Active')") or die(mysql_error());
			
			echo $cnt;
			
		}else{
			
			echo $cnt;
		
		}
	}
	

?>	