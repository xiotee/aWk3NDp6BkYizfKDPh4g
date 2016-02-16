<!-- BEGIN DELETE MODAL -->
<div class="modal fade" id="activate<?php echo $userID; ?>" tabindex="-1" role="dialog" aria-labelledby="activate<?php echo $userID; ?>" aria-hidden="true">
	<div  class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header"> 
				<h4 class="modal-title" id="activate<?php echo $userID; ?>">Activate User</h4>
			</div>												
			<div class="modal-body"  id="annDel">
				<form method="POST" action="includes/admin/users/students/activate_user.php?id=<?php echo $userID ?>" class="form-horizontal" >
										
					<p>Are you sure that you want to activate this user account?</p>
										
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<input type="submit" class="btn btn-success" name="activeBtn" value="Activate" />
									
				</form>
			</div>
		</div>
	</div>
</div>
<!-- END DELETE MODAL-->			
						
