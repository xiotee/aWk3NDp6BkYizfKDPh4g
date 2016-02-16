

<!--BEGIN ADD USER MODAL-->											
<div class="modal fade" id="offModal<?php echo $officerID?>" tabindex="-1" role="dialog" aria-labelledby="offModal<?php echo $officerID?>" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="addModal">Edit Officer</h4>
			</div>
			<div class="modal-body">
				<?php
		
					/*retrieve officer user_id and image*/
					$sql = mysql_query("SELECT user_id, image FROM officer WHERE officer_id = '$officerID'");
					$row = mysql_fetch_assoc($sql);
					$id = $row['user_id'];
					$officerImg = $row['image'];
					
					/*retrieve officer id number*/
					$userSql = mysql_query("SELECT id_num FROM user WHERE user_id = $id");
					$user= mysql_fetch_assoc($userSql);
					$idNum=$user['id_num'];
					
					if($id == null && $officerImg == null){
						$image = "defaultimg.png";
						$userIdNum="";
								
					}else if($id != null && $officerImg == null){
						$userIdNum=$idNum;
						$image = "defaultimg.png";
							
					}else{
						$userIdNum=$idNum;
						$image = $officerImg;
					}
					
				?>
				<form method='POST' action='includes/admin/officers/edit_officer.php' class="form-horizontal" enctype="multipart/form-data">	
					
					<input type="hidden" name="id" id="id" value="<?php echo $officerID?>"/>
					<input type="hidden" name="term" id="term" value="<?php echo $_SESSION['year'];?>">
					
					<!--Image-->
					<div class="control-group">
						<label class="control-label">Officer photo</label>
						<div class="controls span6">
							<div data-provides="fileupload" class="fileupload fileupload-new">
																
								<div  class="fileupload-new thumbnail">
									<img alt="" style="width: 140px; height: 140px;" src="uploads/officers/<?php echo $image?>" />
								</div>
								<div style="max-width: 200px; max-height: 150px;" class="fileupload-preview fileupload-exists thumbnail"></div>
								
								<span  class="btn btn-info btn-file" style="width: 126px">
									<span class="fileupload-new"><i class='icon-camera'>&nbsp;</i> Choose image </span>
									<span class="fileupload-exists"><i class='icon-camera'>&nbsp;</i> Change</span>
									<input type="file" name='photo' id="photo" accept=".jpg, jpeg, png" >
								</span>
								<a data-dismiss="fileupload" class="btn btn-danger fileupload-exists" href="#"><i class='icon-remove'>&nbsp;</i>Remove</a>
							</div>									
						</div>
					</div>					
					
					<!--ID Number-->
					<div class="control-group">
                        <label class="control-label">ID Number</label>
                        <div class="controls">
                            <input type="text" name="idNumber" id="idNumber" class="input-xlarge" value="<?php echo $userIdNum?>" pattern="(?=.*\d).{8}" title="ID number must contain only 8 digits" required> 
                        </div>
                    </div>
					
					
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<input type="submit" class="btn btn-primary" name="submitBtn" value="Submit">  		
			  
				</form>
			</div>
        </div>
    </div>
</div>

