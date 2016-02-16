<!-- BEGIN DELETE MODAL -->
<div class="modal fade" id="delModal<?php echo $userId?>" tabindex="-1" role="dialog" aria-labelledby="delModal<?php echo $userId?>" aria-hidden="true">
	<div  class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header"> 
				<h4 class="modal-title" id="<?php echo $userId ?>">Delete Application</h4>
			</div>												
			<div class="modal-body"  id="annDel">
				<form  class="form-horizontal" method="POST" action="includes/admin/application/delete_applicant.php?id=<?php echo $userId;?>" >
										
					<p>Are you sure that you want to delete this application?</p>
										
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<input type="submit" class="btn btn-danger" name="delApp" value="Delete" />
								
				</form>
			</div>
		</div>
	</div>
</div>
<!-- END DELETE MODAL-->
		
						
