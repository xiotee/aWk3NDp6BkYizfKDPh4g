<?php include("includes/user/vote/alert.php"); 
						
	/*for checkbox*/
	$act=($status == 'Voted')? 'disabled' : '' ;
?>
					
<form method="POST" name="form1" action="includes/user/vote/user_vote.php" class="form-horizontal" onsubmit="return confirmation()">
		
	<?php

		
		$candidate = mysql_query("SELECT * FROM candidate WHERE isDelete='false'");
		$candCount = mysql_fetch_assoc($candidate);
		
		if($candCount == 0){
			
			echo "<br><h4><b><font color='red'>No one applied for DS Officer(s)</font></b></h4>";
			
		}else{
			
			$position = array('President','Vice President for Internal Affairs','Asst. Vice President for Internal Affairs','Secretary','Vice President for External Affairs','Asst. Vice President for External Affairs','Liason','Vice President for Finance','Asst. Vice President for Finance','Treasurer','Vice President for Information','Asst. Vice President for Information','Public Relations Officer');
			
			foreach( $position as $pos ){
								
				/*display position from the array*/
				if(strcmp($pos, "Secretary") == 0 || strcmp($pos, "Liason") == 0 || strcmp($pos, "Treasurer") == 0 || strcmp($pos, "Public Relations Officer") == 0){
										
					echo "<li><h4> ".$pos." <b style='font-size: 11pt'>&nbsp;( Choose at most 2 candidate(s) )</b> </h4></li>";
					$flag=1;
					
				}else{
										
					echo " <li><h4>".$pos."</h4></li>";
					$flag=0;
										
				}
									
				/*display candidates sorted by position*/
				echo "<div  class='row-fluid' style ='height: 260px; overflow-x:hidden'>	
						<div class='widget-body'>";
									
							$candSql = mysql_query("SELECT  c.user_id, c.image, c.position, u.fname, u.lname, u.minitial, u.course, u.stud_year
													FROM candidate AS c
													INNER JOIN user AS u
													ON c.user_id = u.user_id AND c.position = '$pos' AND c.isDelete = 'false'
													ORDER BY u.lname");
											
							if( mysql_num_rows($candSql) !=0 ){
													
								while($candRow = mysql_fetch_assoc($candSql)){
														
									$candUserId = 	$candRow['user_id'];
									$candPhoto =	$candRow['image'];
									$candPos = 		$candRow['position'];
									$candFname =	$candRow['fname'];
									$candLname = 	$candRow['lname'];
									$candMid = 		$candRow['minitial'];
									$candCourse = 	$candRow['course'];
									$candYear =   	$candRow['stud_year'];
															
									image_fix_orientation('uploads/applicants/'.$candPhoto);
									
									/*display candidate*/
									if($flag == 1){
										$checkBox="<input type='checkbox' id='selectTwo-$candUserId' class='checkbox' name='candidate[$pos]' value='$candUserId' $act />";
									}else{
										$checkBox="<input type='checkbox' id='selectOne-$candUserId' class='checkbox' name='candidate[$pos]' value='$candUserId' $act />";
									}
																
									echo "<div class='control-group span2 text-center'>
											<a href='' data-toggle='modal' data-target='#candInfoModal$candUserId' disabled >
												<img src='uploads/applicants/$candPhoto' class='disabled' style='height:150px; width: 150px'/>
											</a>
											<label>
												<h4 href='' data-toggle='modal' data-target='#candInfoModal$candUserId'>$candLname, $candFname $candMid.</h4>
											</label>
											$checkBox
										</div>";
															
									include("includes/user/vote/info_userCand_modal.php");
																	
								}
														
							}else{
													
								echo "  <div class='control-group span2 text-center'>
											<img src='images/defaultimg.png' style='height:150px; width: 150px'>
											<h4> No Candidate(s) </h4>
											</div>";
							}
													
				echo "	</div>
					  </div>";
																
			}
			
			echo "<div class='text-center'>
						<br>
						<button type='submit' name='voteSubmit' id='submit' class='btn btn-large btn-primary' style='width:150px' $action> Submit </button>
					</div>";
			
		}
							
		
	?>
							 
</form>


<?php
	function image_fix_orientation($path){
		$image = imagecreatefromjpeg($path);
		$exif = exif_read_data($path);
	 
		if (!empty($exif['Orientation'])) {
			switch ($exif['Orientation']) {
				case 3:
					$image = imagerotate($image, 180, 0);
					break;
				case 6:
					$image = imagerotate($image, -90, 0);
					break;
				case 8:
					$image = imagerotate($image, 90, 0);
					break;
			}
			imagejpeg($image, $path);
		}
	}
?>
 
<script type="text/javascript" language="javascript">
	
	$("input[id^=selectOne-]").change(function(){
		var max= 1;
			
		if( $("input[id^=selectOne-]:checked").length == max ){
			$("input[id^=selectOne-]").attr('disabled', 'disabled');
			$("input[id^=selectOne-]:checked").removeAttr('disabled');
		}else{
			$("input[id^=selectOne-]").removeAttr('disabled');
		}
		
	});

</script>


<script type="text/javascript" language="javascript">
	
	$("input[id^=selectTwo-]").change(function(){
		var max= 2;
		
		if( $("input[id^=selectTwo-]:checked").length == max ){
			$("input[id^=selectTwo-]").attr('disabled', 'disabled');
			$("input[id^=selectTwo-]:checked").removeAttr('disabled');
		}else{
			 $("input[id^=selectTwo-]").removeAttr('disabled');
		}
		
	});

</script>

<script type="text/javascript" language="javascript">
	var checkbox = $(".checkbox");
    var button = $("#submit");
	
    button.attr("disabled","disabled");
    checkbox.change(function(){
        if(this.checked){
            button.removeAttr("disabled");
        }else{
            button.attr("disabled","disabled");
        }
    });

</script>
 
<!--<script type="text/javascript" language="javascript">

	function limitcheck2(ch, limit) 
	{
		var elem, i = 0, total=0, ctr = limit, check = ch.form;
			
		while (elem = check.elements[i++])
		{
				
			if (elem.className == 'checkbox' && elem.checked){
				total+=1;
			}
				
			if (total > ctr)
			{
				return false;
			}
		}

		return true;
	}

</script> -->