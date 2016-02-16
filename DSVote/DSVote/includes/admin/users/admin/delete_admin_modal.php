<!-- BEGIN DELETE MODAL -->
<div class="modal fade" id="delModal<?php echo $adminID; ?>" tabindex="-1" role="dialog" aria-labelledby="delModal<?php echo $adminID; ?>" aria-hidden="true">
	<div  class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header"> 
				<h4 class="modal-title" id="<?php echo $adminID; ?>">Delete User</h4>
			</div>												
			<div class="modal-body"  id="annDel">
				<form method="POST" action="includes/admin/users/admin/delete_admin.php?id=<?php echo $adminID ?>" class="form-horizontal" >
										
					<p>Are you sure that you want to delete this user account?</p>
										
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<input type="submit" class="btn btn-danger" name="delSubmit" value="Delete" />
									
				</form>
			</div>
		</div>
	</div>
</div>
<!-- END DELETE MODAL-->	
						
						
