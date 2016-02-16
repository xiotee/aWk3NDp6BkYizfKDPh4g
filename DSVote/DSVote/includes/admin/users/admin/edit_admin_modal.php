
<form method='GET' class="form-horizontal" action="includes/admin/users/admin/edit_admin.php" id="editForm"> 	
<!-- BEGIN EDIT MODAL -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModal" aria-hidden="true">	
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header"> 
				<h4 class="modal-title" >Edit User</h4>
			</div>	
		
			<div class="modal-body" >
										
				
						
					<div id="edAlert"></div>
						
					<input type="hidden" name="id" id="id"  />
						
					<!--First Name-->
					<div class="control-group">
						<label class="control-label">First Name</label>
						<div class="controls">
							<input type="text" name="fname" id="firstname" style="text-transform: capitalize;" class="input-xlarge" pattern="[A-Za-z\s]{1,}" title="First Name must not contain numeric characters" required> 
						</div>
					</div>
						
					<!--Last Name-->
					<div class="control-group">
						<label class="control-label">Last Name</label>
						<div class="controls">
							<input type="text" name="lname" id="lastname" style="text-transform: capitalize;" class="input-xlarge" pattern="[A-Za-z\s]{1,}" title="Last Name must not contain numeric characters" required> 
						</div>
					</div>
						
					<!--Username-->
					<div class="control-group">
						<label class="control-label">Username</label>
						<div class="controls">
							<input type="text" name="uname" id="uname" class="input-xlarge" readonly> 
						</div>
					</div>
					
					</div>					

			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<input type="submit" class="btn btn-primary" name="Edit" id="editBtn"  value="Submit"> 
										
										
			</div>
		</div>
	</div>
</div>
<!-- END EDIT MODAL-->
</form>

	
<!--<script src="js/jquery-1.8.3.min.js"></script>

<script>

	$('#editForm').each(function(){
		$(this).data('serialized', $(this).serialize());
	})
    .on('change input', function() {
        $(this).find('#editBtn').attr('disabled', $(this).serialize() == $(this).data('serialized'));
    })
	.find('#editBtn')
	.attr('disabled', true);
	
	
</script>


<script language="JavaScript" type="text/javascript">

	$( "#editForm" ).on( "submit", function( event ) {
		var btn = $('#editBtn').val();
		var editID = $('#id').val();
		var firstname = $('#firstname').val();
		var lastname = $('#lastname').val();
		var username = $('#uname').val();
		
		$.ajax({
			type : 'GET',
			data :{'Edit':btn, 'id':editID, 'fname':firstname, 'lname':lastname, 'uname':username},
			url  : 'includes/admin/users/admin/edit_admin.php',
			success: function(editData){
				if(editData > 0 ){
					$('#edAlert').html("<div class=' alert alert-error' align='center'> Username already exists! </div>");
				}else{
					setTimeout(function() { window.location=window.location;},200);
				}
							
			}
		});
		
		event.preventDefault();
		console.log( $( this ).serialize() );
	});
</script>-->

	