<?php
	$candQuery = mysql_query("SELECT term_start FROM candidate WHERE term_start=year(now()) ORDER BY candidate_id DESC LIMIT 1");
	$candRow = mysql_fetch_assoc($candQuery);
	$candCount = mysql_num_rows($candQuery);
						
	if($candCount==0){
		echo "<br><h4><b><font color='red'>No candidates for DS Officer(s)</font></b></h4>";
	
	}
	else{
		
		$position = array('President','Vice President for Internal Affairs','Asst. Vice President for Internal Affairs','Secretary','Vice President for External Affairs','Asst. Vice President for External Affairs','Liason','Vice President for Finance','Asst. Vice President for Finance','Treasurer','Vice President for Information','Asst. Vice President for Information','Public Relations Officer');
					
		foreach( $position as $pos ){
									
			/*display position from the array*/
			echo "<h4><li>$pos</li></h4>
					<div class='row-fluid' style ='height: 260px; overflow-x:hidden'>
						<div class='widget-body'>";
								
							$candSql = mysql_query("SELECT c.image, c.vote_count, c.status, u.fname, u.lname, u.minitial
													FROM candidate AS c
													INNER JOIN user AS u
													ON c.user_id = u.user_id AND c.position = '$pos' AND term_start = year(now())
													ORDER BY c.vote_count DESC");
										
							if( mysql_num_rows($candSql) !=0 ){
												
								while($candRow = mysql_fetch_assoc($candSql)){
														
									$candPhoto =	$candRow['image'];
									$candVoteCnt =  $candRow['vote_count'];
									$candFname =    $candRow['fname'];
									$candLname = 	$candRow['lname'];
									$candMid = 		$candRow['minitial'];
									$candStat =     $candRow['status'];
														
									if($candStat == 'Winner'){
										
										$status = 'Winner';
										$class = 'label label-success label-mini';
										$candName = "<font color='blue'>$candLname, $candFname $candMid.";
										$voteCnt = "$candVoteCnt</font>";
																	
									}else{
										
										$status = ' ';
										$class = ' ';
										$candName = "$candLname, $candFname $candMid.";
										$voteCnt = "$candVoteCnt";
																	
									}
																	
									echo " <div class='control-group span2 text-center'>
												<img src='uploads/applicants/$candPhoto' style='height:130px; width: 130px'>
												<h4> $candName </h4>
												<label><font size='5pt'> $voteCnt </font></label>
												<span class='$class' style='width: 55px'>$status</span>
											</div>";
								}						
								
							}else{
												
								echo "  <div class='control-group span2 text-center'>
											<img src='images/defaultimg.png' style='height:130px; width: 130px'><br> </br>
											<h4 class='text-center'> No Applicant(s) </h4>
											</div>";
							}
						 
												
			echo "		</div>
					</div>";
			
		}						
								
	}
?>