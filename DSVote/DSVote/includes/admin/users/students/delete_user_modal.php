<!-- BEGIN DELETE MODAL -->
<div class="modal fade" id="delModal<?php echo $userID; ?>" tabindex="-1" role="dialog" aria-labelledby="delModal<?php echo $userID; ?>" aria-hidden="true">
	<div  class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header"> 
				<h4 class="modal-title" id="<?php echo $userID; ?>">Delete Administrator</h4>
			</div>												
			<div class="modal-body"  id="annDel">
				<form method="POST" action="includes/admin/users/students/delete_user.php?id=<?php echo $userID ?>" class="form-horizontal" >
										
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
						
