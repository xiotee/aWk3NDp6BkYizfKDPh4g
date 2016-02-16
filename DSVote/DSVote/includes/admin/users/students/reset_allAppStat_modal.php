<!-- BEGIN DELETE MODAL -->
<div class="modal fade" id="appStatModal" tabindex="-1" role="dialog" aria-labelledby="appStatModal" aria-hidden="true">
	<div  class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header"> 
				<h4 class="modal-title" id="appStatModal">Reset Application Status</h4>
			</div>												
			<div class="modal-body" >
				<form method="POST" action="includes/admin/users/students/reset_all_as.php" class="form-horizontal" >
										
					<p>Are you sure you want to reset users' application status?</p>
										
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<input type="submit" class="btn btn-primary" name="resetApp" value="OK" />
									
				</form>
			</div>
		</div>
	</div>
</div>
<!-- END DELETE MODAL-->			
						
