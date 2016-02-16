<!-- BEGIN DECLINE APPLICATION MODAL -->
<div class="modal fade" id="decModal<?php echo $userId?>" tabindex="-1" role="dialog" aria-labelledby="decModal<?php echo $userId?>" aria-hidden="true">
	<div  class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header"> 
				<h4 class="modal-title" id="<?php echo $userId ?>">Decline Application</h4>
			</div>												
			<div class="modal-body"  id="annDel">
				<form  class="form-horizontal" method="POST" action="includes/admin/application/decline_app.php?id=<?php echo $userId ?>" >
										
					<p>Are you sure that you want to decline this application?</p>
										
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<input type="submit" class="btn btn-danger" name="decline" value="Decline" />
								
				</form>
			</div>
		</div>
	</div>
</div>
<!-- END DECLINE APPLICATION MODAL-->

						
						
