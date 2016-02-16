<!-- BEGIN DELETE MODAL -->
<div class="modal fade" id="resetStatModal" tabindex="-1" role="dialog" aria-labelledby="resetStatModal" aria-hidden="true">
	<div  class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header"> 
				<h4 class="modal-title" id="resetStatModal">Reset Status</h4>
			</div>												
			<div class="modal-body" >
				<form method="POST" action="includes/admin/users/students/reset_user_avs.php" class="form-horizontal" id="resetModal" >
										
					<input type="hidden" id="idNum" name="idNum" />
					<p>What status you want to reset?</p>
										
			</div>
			<div class="modal-footer">
			
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<input type="submit" class="btn btn-primary" name="resetAppStat" value="Application Status" />
				<input type="submit" class="btn btn-danger" name="resetVoteStat" value="Vote Status" />
									
				</form>
			</div>
		</div>
	</div>
</div>
<!-- END DELETE MODAL-->			
						
