<?php
	
	if(isset($_GET['term'])){
		
		$officerSql = mysql_query("SELECT officer_id, user_id, position, image FROM officer WHERE year_start='".$_GET['term']."'");
		$count= mysql_num_rows($officerSql);
		$i=2;
		
		while($officer= mysql_fetch_assoc($officerSql)){
							
			$officerID =     $officer['officer_id'];
			$officerUserID = $officer['user_id'];
			$officerPos=	 $officer['position'];
			$officerImg = 	 $officer['image'];
			
			
			/*BEGIN name and/or image to be displayed*/
			$userSql = mysql_query("SELECT fname, lname, minitial FROM user WHERE user_id = $officerUserID");
								
			while($user= mysql_fetch_assoc($userSql)){
				$fullname=(" ".$user['fname']." ".$user['minitial'].". ".$user['lname']."  ");
			}
			
			if($officerUserID == null && $officerImg == null){
				$name = "No Officer Added";
				$image = "defaultimg.png";
				
			}else if($officerUserID != null && $officerImg == null){
				$name=$fullname;
				$image = "defaultimg.png";
			
			}else{
				$name= $fullname;
				$image = $officerImg;
			}
		 	/*END name and/or image to be displayed*/
		 					
			if(strcasecmp($officerPos, "President") == 0){
								
				echo "<div class='row-fluid'>                                 
						<div class='span6'>
							<div class='row-fluid about-us offset6'>
								<div class='span4'>
									<img src='uploads/officers/$image' alt='$officerPos' />
								</div>
								<div class='span8'>
									<div class='info light-green'>
										<h1>$name</h1>
										<p>$officerPos</p>       
									</div>
								</div>
								<div class='space20'></div>                                        
							</div>
						</div>							   
					</div>";
					
			}else{
							
				echo "<ul class='nav'>
						<li class='nav'>";                                
								
							$displayPos = (($i%2)==0)? "pull-left span6" : "pull-right span6";
							
							echo "<div class='$displayPos'>
									<div class='row-fluid about-us'>
										<div class='span4'>
											<img src='uploads/officers/$image' alt='$officerPos' />
										</div>
										<div class='span8'>
											<div class='info terques'>
												<h1>$name</h1>
												<p>$officerPos</p>
											</div>
										</div>
										<div class='space10'></div>
									</div>
								</div>";
							
							$i++;
							
				echo "  </li>
					  </ul>";
			}
		}

	}
	
?>