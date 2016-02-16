<?php		 
	$usersql = mysql_query(" SELECT * FROM user ORDER BY id_num ASC");
								
	if(mysql_num_rows($usersql)>0){
								 
		while($theusers = mysql_fetch_assoc($usersql)){
									
			$userID = $theusers['user_id'];
			$userIdNum = $theusers['id_num'];
			$userFname = $theusers['fname'];
			$userLname = $theusers['lname'];
			$userMid = $theusers['minitial'];
			$userCourse = $theusers['course'];
			$userYr = $theusers['stud_year'];
			$userMobile = $theusers['mobile'];
			$userEmail = $theusers['email'];
			$userVstat = $theusers['vote_status'];
			$userAppstat = $theusers['application_status'];
			$userAccstat = $theusers['account_status'];
			$userUname = $theusers['username'];
			$userPass = $theusers['password'];
			$fullName = ("$userFname $userMid. $userLname"); 
									
			echo "<tr class=''>
					<td>$userID</td>
					<td>$userIdNum</td>
					<td style='text-transform: capitalize;'>$fullName</td>
					<td style='text-transform: capitalize;'>$userCourse - $userYr</td>
					<td>$userMobile</td>
					<td>$userEmail</td>
					<td style='text-transform: capitalize;'>$userVstat</td>
					<td style='text-transform: capitalize;'>$userAppstat</td>
					<td style='text-transform: capitalize;'>$userAccstat</td>
					<td><center><button class='btn btn-small btn-primary' id='uedit$userID' data-toggle='modal' data-target='#uedModal$userID'   title='Edit User'><i class='icon-pencil icon-white'></i> Edit</button></center></td>";
					
				if($userAccstat == 'Active'){
					echo "<td><center><button class='btn btn-small btn-danger' id='delete$userID' data-toggle='modal' data-target='#delModal$userID' title='Delete User' ><i class='icon-remove'></i> Delete</button></center></td>";
				}else{
					echo "<td><center><button class='btn btn-small btn-success' id='activate$userID' data-toggle='modal' data-target='#activate$userID' title='Activate User' ><i class='icon-off'></i> Activate</button></center></td>";
				}
				
			echo "</tr>";	
			
			include ("includes/admin/users/students/edit_user_modal.php");
			include ("includes/admin/users/students/delete_user_modal.php");
			include ("includes/admin/users/students/activate_user_modal.php");			
			
		}
	}
?>	 
                       