<!-- BEGIN EDIT MODAL -->
<div class="modal fade" id="uedModal<?php echo $userID ?>" tabindex="-1" role="dialog" aria-labelledby="uedModal<?php echo $userID ?>" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header"> 
				<h4 class="modal-title" id="uedmyModalLabel<?php echo $userID ?>">Edit Administrator</h4>
			</div>																			
			<div class="modal-body" id="annEdit">
										
				<form method='get' action='includes/admin/users/students/edit_user.php' class="form-horizontal">	
					<input type="hidden" name="gID" class="input-xlarge" value="<?php echo $userID ?>"> 							
					
					<!--ID #-->					
					<div class="control-group">
						<label class="control-label">ID Number</label>
						<div class="controls">
							<input type="text" name="gIDNum" class="input-xlarge" value="<?php echo $userIdNum; ?>" readonly> 
						</div>
					</div>	
					
					<!--Last Name-->	
					<div class="control-group">
						<label class="control-label">Last Name</label>
						<div class="controls">
							<input type="text" name="glName" style="text-transform: capitalize;" pattern="[A-Za-z\s]{1,}" title="Last Name must not contain numeric characters" class="input-xlarge" value="<?php echo $userLname; ?>" required > 
						</div>
					</div>
					
					<!--First Name-->	
					<div class="control-group">
						<label class="control-label">First Name</label>
						<div class="controls">
							<input type="text" name="gfName" style="text-transform: capitalize;" class="input-xlarge" pattern="[A-Za-z\s]{1,}" title="First Name must not contain numeric characters" value="<?php echo $userFname; ?>" required> 
						</div>
					</div>
					
					<!--Middle Initial-->	
					<div class="control-group">
						<label class="control-label">Middle Initial</label>
						<div class="controls">
							<input type="text" name="gmInitial" style="text-transform: capitalize;" class="input-xlarge" pattern="[A-Za-z\s]{1}" title="Middle Inital must contain only 1 character" value="<?php echo $userMid; ?>"  required > 
						</div>
					</div>
					
					<!--Course-->	
					<div class="control-group">
						<label class="control-label">Course</label>
						<div class="controls">
							<select type="text" name="gcourse" class="input-xlarge" required>
								<option value="<?php echo $userCourse; ?>"> <?php echo $userCourse; ?> </option>
								
								<?php
									$val= (strcasecmp($userCourse, "BSCS")==0)? "BSIT" : "BSCS"; 
									echo  "<option value='$val'> $val </option>";
								?>
								
							</select>
						</div>
					</div>
					
					<!--Student Year-->	
					<div class="control-group">
						<label class="control-label">Year</label>
						<div class="controls">
							<input  type="number" name="gyear" min="1" max="4" class="input-xlarge" value="<?php echo $userYr; ?>" required> 
						</div>
					</div>
					
					<!--Mobile Number-->	
					<div class="control-group">
						<label class="control-label">Mobile #</label>
						<div class="controls">
							<input type="text" name="gmobile" pattern="[0-9]{11}" title="Must be 11 digits" class="input-xlarge" value="<?php echo $userMobile; ?>"> 
						</div>
					</div>
					
					<!--Email Address-->	
					<div class="control-group">
						<label class="control-label">Email Address</label>
						<div class="controls">
							<input type="email" name="gemail" class="input-xlarge" value="<?php echo $userEmail; ?>"> 
						</div>
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<input type="submit" class="btn btn-primary" name="Edit"  value="Submit"> 
										
				</form>							
			</div>
		</div>
	</div>
</div>
<!-- END EDIT MODAL-->		