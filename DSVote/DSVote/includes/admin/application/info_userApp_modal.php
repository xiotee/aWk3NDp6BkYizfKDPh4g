<!-- BEGIN VIEW APPLICATION MODAL -->										
<div class="modal fade" id="appInfoModal<?php echo $userId?>" tabindex="-1" role="dialog" aria-labelledby="appInfoModal<?php echo $userId?>" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="appInfoModal<?php echo $userId?>">Applicant Information</h4>
			</div>
			<div class="modal-body">
			
				<div class="widget-body">
					
					<div class="control-group">
                        <div class="controls text-center">
							<img id="photo" title="No image" src="uploads/applicants/<?php echo $appUserPhoto?>" style="height:150px; width: 150px"/>
                        </div>
                    </div></br>
					
					<!--ID Number-->
					<div class="control-group">
						<dl class="dl-horizontal">
							<dt><b>ID Number</b> </dt>
							<dd style="margin-left: 80px;"><b>: &nbsp;</b> &nbsp; <?php echo $userIdNum?></dd>
                        </dl>
					</div>

					<!--Full Name-->
					<div class="control-group">
						<dl class="dl-horizontal">
							<dt><b>Name</b></dt>
							<dd style="margin-left: 80px;"><b>: &nbsp;</b> &nbsp;<?php echo ("$userFname $userMid. $userLname");  ?></dd>
						</dl>
					</div>	
					
					<!--Course and Year-->
					<div class="control-group">
						<dl class="dl-horizontal">
							<dt><b>Course & Year</b></dt>
							<dd style="margin-left: 80px;"><b>: &nbsp;</b> &nbsp;<?php echo ("$userCourse - $userYear");  ?></dd>
						</dl>
					</div>
					
					<!--Position Applied-->
					<div class="control-group">
						<dl class="dl-horizontal">
							<dt><b>Position Applied</b> </dt>
							<dd style="margin-left: 80px;"><b>: &nbsp;</b> &nbsp;<?php echo $appUserPos  ?></dd>
						</dl>
					</div>
					
					<!--Achievements-->
					<div class="control-group">
						<dl class="dl-horizontal">
							<dt><b>Achievements </b></dt>
							<dd style="margin-left: 80px;"><b>: &nbsp;</b> &nbsp;</dd>
							<div>
							<dl class="dl-horizontal">
								<ul>
									<?php
									
										$sql=mysql_query("SELECT achievements FROM application WHERE user_id='$userId'");
										
										while($row= mysql_fetch_assoc($sql)){
											
											$achievements = explode("\n", $row['achievements']);
											
											foreach ($achievements as $num => $item) {
												
												echo "<li>" . htmlspecialchars($item) . "</li>";
												
											}
											
											
											
										}
									?>
								<ul>
							</dd>
							</div>
						</dl>
					</div>
					
				</div>
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>		
			  
				
			</div>
        </div>
    </div>
</div>
<!-- END VIEW APPLICATION MODAL-->		