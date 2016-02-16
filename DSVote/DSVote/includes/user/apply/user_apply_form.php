<!--disable fields if user has applied-->


<!-- BEGIN FORM-->
<form method="post" class="form-horizontal" action="includes/user/apply/user_apply.php" onsubmit="return confirmation()" enctype="multipart/form-data">									
	<!--Position-->
	<div class="span12"></div>
										
		<div class="control-group offset2">
			<label class="control-label">Add photo</label>
			<div class="controls span9">
				<div data-provides="fileupload" class="fileupload fileupload-new">
													
					<div  class="fileupload-new thumbnail">
						<img alt="" style="width: 140px; height: 140px;" src="images/defaultimg.png" />
					</div>
				<div style="max-width: 200px; max-height: 150px;" class="fileupload-preview fileupload-exists thumbnail"></div>
													
												
				<span  class="btn btn-info btn-file" <?php echo $action?>>
					<span class="fileupload-new"><i class='icon-camera'>&nbsp;</i> Choose image </span>
					<span class="fileupload-exists"><i class='icon-camera'>&nbsp;</i> Change</span>
					<input type="file" name='image' accept=".jpg, .jpeg, jpg" <?php echo $action?>>
				</span>
				<a data-dismiss="fileupload" class="btn btn-danger fileupload-exists" href="#"><i class='icon-remove'>&nbsp;</i>Remove</a>
													
			</div>
		</div>
											
	</div>
											
	<div class="control-group offset2">
		<label class="control-label">Choose a Position</label>
		<div class="controls span3">
			<select type="text" class="input-xlarge" style="width:545px" name="position" tabindex="1" <?php echo $action?>>
				<option value="President">President</option>
				<option value="Vice President for Internal Affairs">Vice President for Internal Affairs</option>
				<option value="Asst. Vice President for Internal Affairs">Asst. Vice President for Internal Affairs</option>
				<option value="Secretary">Secretary</option>											
				<option value="Vice President for External Affairs">Vice President for External Affairs</option>
				<option value="Asst. Vice President for External Affairs">Asst. Vice President for External Affairs</option>
				<option value="Liason">Liason</option>													
				<option value="Vice President for Finance">Vice President for Finance</option>											
				<option value="Asst. Vice President for Finance">Asst. Vice President for Finance</option>
				<option value="Treasurer">Treasurer</option>												
				<option value="Vice President for Information">Vice President for Information</option>								
				<option value="Asst. Vice President for Information">Asst. Vice President for Information</option>
				<option value="Public Relations Officer 2">Public Relations Officer 2</option>												
			</select>
		</div>
	</div>	
										
	<!--List of achievements-->
	<div class="control-group offset2">
		<label class="control-label" >List your achievements</label>
		<div class="controls span3">
			<textarea class="input-xxlarge" rows="8" name="achievements" <?php echo $action=($count!=0)?'disabled':''?>></textarea>
		</div>
	</div>							
										
	<div class="offset5">
		<br>
		<button type="submit" name="ApplySubmit" style="width:130px" class="btn btn-large btn-primary" <?php echo $action?>>  Submit </button> 
	</div>
	
</form>