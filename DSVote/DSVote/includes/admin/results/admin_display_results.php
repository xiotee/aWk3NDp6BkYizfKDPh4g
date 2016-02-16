<?php
	$candQuery = mysql_query("SELECT * FROM candidate WHERE term_start='".$_GET['resTerm']."' AND isDelete='false'");
	$candCount = mysql_num_rows($candQuery);
	$term = $_GET['resTerm'];
	
	if($candCount==0){
		echo "<br><h4><b><font color='red'>No candidates for DS Officer(s)</font></b></h4>";
	}
	else{
						
		$position = array('President','Vice President for Internal Affairs','Asst. Vice President for Internal Affairs','Secretary','Vice President for External Affairs','Asst. Vice President for External Affairs','Liason','Vice President for Finance','Asst. Vice President for Finance','Treasurer','Vice President for Information','Asst. Vice President for Information','Public Relations Officer');
							
		if(isset($_GET['resTerm'])){
								
			foreach( $position as $pos ){
														
				/*display position from the array*/
				echo "<h4><li>$pos</li></h4>
						<div class='row-fluid' style ='height: 260px; border:1px; border-color: #ff0000; overflow-x:hidden'>
							<div class='widget-body'>";
														
								$candSql = mysql_query("SELECT c.candidate_id, c.image, c.vote_count, c.status, u.fname, u.lname, u.minitial
														FROM candidate AS c											
														INNER JOIN user AS u
														ON c.user_id = u.user_id AND c.position = '$pos' AND c.term_start='".$_GET['resTerm']."'
														ORDER BY c.vote_count DESC");
																
								if( mysql_num_rows($candSql) !=0 ){
									
									
								
									while($candRow = mysql_fetch_assoc($candSql)){
																				
										$candId =       $candRow['candidate_id'];
										$candPhoto =	$candRow['image'];
										$candFname =    $candRow['fname'];
										$candLname = 	$candRow['lname'];
										$candMid = 		$candRow['minitial'];
										$candVoteCnt =  $candRow['vote_count'];
										$candStat = 	$candRow['status'];
										
																				
										if($candStat == 'Winner'){
																	
											$btnStyle = "btn btn-small btn-success";
											$candName = "<font color='blue'>$candLname, $candFname $candMid.";
											$voteCnt = "$candVoteCnt</font>";
																	
										}else{
																	
											$btnStyle = "btn btn-small btn-info";
											$candName = "$candLname, $candFname $candMid.";
											$voteCnt = "$candVoteCnt";
																	
										}
																	
										echo " <div class='control-group span2 text-center'>
													<img src='uploads/applicants/$candPhoto' style='height:130px; width: 130px'>
													<h4> $candName </h4>
													<label><font size='5pt'> $voteCnt </font></label>
													<a class='$btnStyle' href='includes/admin/results/status.php?id=$candId&stat=$candStat&term=$term'>$candStat</a>
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
							
	}
?>