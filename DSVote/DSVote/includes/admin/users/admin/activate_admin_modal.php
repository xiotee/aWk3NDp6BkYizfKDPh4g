<!-- BEGIN DELETE MODAL -->
<div class="modal fade" id="activate<?php echo $adminID; ?>" tabindex="-1" role="dialog" aria-labelledby="activate<?php echo $adminID; ?>" aria-hidden="true">
	<div  class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header"> 
				<h4 class="modal-title" id="activate<?php echo $adminID; ?>">Activate User</h4>
			</div>												
			<div class="modal-body" >
				<form method="POST" action="includes/admin/users/admin/activate_admin.php?id=<?php echo $adminID ?>" class="form-horizontal" >
										
					<p>Are you sure that you want to activate this user account?</p>
										
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<input type="submit" class="btn btn-success" name="actBtn" value="Activate" />
									
				</form>
			</div>
		</div>
	</div>
</div>
<!-- END DELETE MODAL-->	
						
						
