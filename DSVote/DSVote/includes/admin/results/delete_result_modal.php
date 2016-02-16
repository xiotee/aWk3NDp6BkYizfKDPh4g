<!-- BEGIN DELETE MODAL -->
<div class="modal fade" id="delResModal<?php echo $_GET['resTerm']?>" tabindex="-1" role="dialog" aria-labelledby="delResModal<?php echo $_GET['resTerm']?>" aria-hidden="true">
	<div  class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header"> 
				<h4 class="modal-title">Delete Result</h4>
			</div>												
			<div class="modal-body"  id="annDel">
				<form  class="form-horizontal" method="POST" action="includes/admin/results/delete_result.php?term=<?php echo $_GET['resTerm']?>" >
										
					<p>Are you sure you want to delete this result?</p>
										
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<input type="submit" class="btn btn-danger" name="delRes" value="Delete" />
								
				</form>
			</div>
		</div>
	</div>
</div>
<!-- END DELETE MODAL-->
		
						
