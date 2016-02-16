<!-- BEGIN EDIT MODAL -->
<div class="modal fade" id="edModal<?php echo $ann_id ?>" tabindex="-1" role="dialog" aria-labelledby="edModal<?php echo $ann_id ?>" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header"> 
				<h4 class="modal-title">Edit Announcement</h4>
			</div>																			
			<div class="modal-body" id="annEdit">
										
				<form method="POST" action="includes/admin/announcements/admin_edit_ann.php" onsubmit="confirmation()" class="form-horizontal">
					<input type="hidden"  name="gID" class="input-xlarge" value="<?php echo $ann_id ?>"> 
					
					<div class="control-group">
						<label class="control-label">Title</label>
						<div class="controls">
							<input type="text"  name="gtitle" class="input-xlarge" value="<?php echo $title; ?>"> 
						</div>
					</div>										
					<div class="control-group">
						<label class="control-label">Content</label>
						<div class="controls">
							<textarea class="input-xlarge" name="gcontent" rows="10"  ><?php echo $content; ?></textarea>
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