<!-- BEGIN DELETE MODAL -->
<div class="modal fade" id="voteStatModal" tabindex="-1" role="dialog" aria-labelledby="voteStatModal" aria-hidden="true">
	<div  class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header"> 
				<h4 class="modal-title" id="voteStatModal">Reset Vote Status</h4>
			</div>												
			<div class="modal-body" >
				<form method="POST" action="includes/admin/users/students/reset_all_vs.php" class="form-horizontal" >
										
					<p>Are you sure you want to reset users' vote status?</p>
										
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<input type="submit" class="btn btn-primary" name="resetVote" value="OK" />
									
				</form>
			</div>
		</div>
	</div>
</div>
<!-- END DELETE MODAL-->			
						
