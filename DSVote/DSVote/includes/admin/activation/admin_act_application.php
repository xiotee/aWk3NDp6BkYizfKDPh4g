
	<!-- BEGIN APPLICATION  MODAL --> 
	<div class="modal fade" id="appModal" tabindex="-1" role="dialog" aria-labelledby="appModal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header"> 
					<h4 class="modal-title" id="edmyModalLabel19">Activate Application</h4>
				</div>
				<div class="modal-body" >
					<form id="act_app" method='POST' action='includes/admin/activation/admin_app_activation.php' class="form-horizontal" >
					<input type="text"   name="type" value="Application" style="display: none;">  	
						<p>Are you sure that you want to activate application?</p>
	     
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<input type="submit" class="btn btn-primary" name="Activate"  value="Activate">  		
						
					</form>
				</div>
			</div>
		</div>
    </div>
	<!-- END APPLICATION MODAL-->		

	<!-- BEGIN X APPLICATION  MODAL --> 
	<div class="modal fade" id="appModal1" tabindex="-1" role="dialog" aria-labelledby="appModal1" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header"> 
					<h4 class="modal-title" id="dappModal1">Deactivate Application</h4>
				</div>
				<div class="modal-body">
					<form  method='POST' action='includes/admin/activation/admin_app_activation.php' class="form-horizontal" >
					<input type="text"   name="type" value="Application" style="display: none;">  
						<p>Are you sure that you want to deactivate application?</p>
	     
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<input type="submit" class="btn btn-primary" name="Deactivate"  value="Deactivate">  		
						
					</form>
				</div>
			</div>
		</div>
    </div>
	<!-- END X APPLICATION MODAL-->		