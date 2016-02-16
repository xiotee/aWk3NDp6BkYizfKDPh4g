<!-- BEGIN APPROVE APPLICATION MODAL -->
<div class="modal fade" id="appModal<?php echo $userId?>" tabindex="-1" role="dialog" aria-labelledby="appModal<?php echo $userId?>" aria-hidden="true">
	<div  class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header"> 
				<h4 class="modal-title" id="<?php echo $userId ?>">Approve Application</h4>
			</div>												
			<div class="modal-body">
				<form  class="form-horizontal" method="POST" action="includes/admin/application/approve_app.php?id=<?php echo $userId; ?>&pos=<?php echo $appUserPos; ?>" >
										
					<p>Are you sure that you want to approve this application?</p>
										
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<input type="submit" class="btn btn-primary" name="approve" value="Approve" />
								
				</form>
			</div>
		</div>
	</div>
</div>
<!-- END APPROVE APPLICATION MODAL-->
			
						
