<!-- BEGIN VIEW APPLICATION MODAL -->										
<div class="modal fade" id="candInfoModal<?php echo $candUserId?>" tabindex="-1" role="dialog" aria-labelledby="candInfoModal<?php echo $candUserId?>" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="candInfoModal<?php echo $candUserId?>">Candidate Information</h4>
			</div>
			<div class="modal-body">
			
				<div class="widget-body">
					
					<!--Photo-->
					<div class="control-group">
                        <div class="text-center">
							<img id="photo" title="Candidate Photo" src="uploads/applicants/<?php echo $candPhoto?>" style="height:150px; width: 150px;"/>
                        </div>
                    </div><br>

					<!--Full Name-->				
					<dl class="dl-horizontal">
						<dt><b>Name</b></dt>
						<dd style="margin-left: 80px;"><b>: &nbsp;</b> &nbsp;<?php echo ("$candLname $candFname, $candMid. ");  ?></dd>
					</dl>
					
					
					<!--Course and Year-->					
					<dl class="dl-horizontal">
						<dt><b>Course & Year</b></dt>
						<dd style="margin-left: 80px;"><b>: &nbsp;</b> &nbsp;<?php echo ("$candCourse - $candYear");  ?></dd>
					</dl>
				
					
					<!--Position Applied-->
					<dl class="dl-horizontal">
						<dt><b>Position Applied</b> </dt>
						<dd style="margin-left: 80px;"><b>: &nbsp;</b> &nbsp;<?php echo $candPos  ?> </dd>
					</dl>
					
					
					<!--Achievements-->					
					<dl class="dl-horizontal">
						<dt><b>Achievements </b></dt>
						<dd style="margin-left: 80px;"><b>: &nbsp;</b> </dd>
						<div>
							<dl class="dl-horizontal">
							<ul>
										<?php
									
											$sql=mysql_query("SELECT achievements FROM application WHERE user_id='$candUserId'");
										
											while($row= mysql_fetch_assoc($sql)){
											
												$achievements = explode("\n", $row['achievements']);
											
												foreach ($achievements as $num => $item) {
													
													echo "<li>". htmlspecialchars($item)." </li>";
											
												}
																							
											}
										?>
							</ul>
							<dl>
						</div>
						
					</dl>
					
				</div>
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>		
			  
				
			</div>
        </div>
    </div>
</div>
<!-- END VIEW APPLICATION MODAL-->		