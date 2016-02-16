<!--BEGIN CHANGE PASSWORD MODAL-->											
<div class="modal fade" id="uchangePassModal" tabindex="-1" role="dialog" aria-labelledby="uchangePassModal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="uchangePassModal">Change Password</h4>
			</div>
			<div class="modal-body">
			
				<form method="POST" action='' class="form-horizontal" id="uchangePass" >
					
					<div id="passAlert"></div>
					
					<center><img src="images/lock-icon.png" style="width: 110px; height: 110px" /></center>	
					<div class="well-large"></div>	
									
					<!--Old Password-->
					<div class="control-group">
						<label class="control-label">Old Password</label>
						<div class="controls">
							<input type="password" class="input-xlarge" name="oldPass" id="oldPass" required />
						</div>
					</div>	
									
					<!--New Password-->
					<div class="control-group">
						<label class="control-label">New Password</label>
						<div class="controls">
							<input type="password" class="input-xlarge" name="newPass" id="newPass" pattern=".{8,}" title="Password must contain at least 8 characters." required />
						</div>
					</div>	

					<!--Confirm Password-->
					<div class="control-group">
						<label class="control-label">Confirm Password</label>
						<div class="controls">
							<input type="password" class="input-xlarge" name="confirmPass" id="confirmPass" pattern=".{8,}" title="Password must contain at least 8 characters." required />
						</div>
					</div>									
					
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>	
				<button type="submit" name="savechanges" id="savechanges" class="btn btn-primary ">  Save Changes </button> 
				
				</form>
			</div>
        </div>
    </div>
</div>

<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>

<script language="JavaScript" type="text/javascript">

$( "#uchangePass" ).on( "submit", function( event ) {
	
	var submitBtn = $('#savechanges').val();
	var oldPass = $('#oldPass').val();
	var newPass = $('#newPass').val();
	var conPass = $('#confirmPass').val();
	
	$.ajax({
		type : 'POST',
		data :{'savechanges':submitBtn, 'oldPass':oldPass, 'newPass':newPass, 'confirmPass':conPass},
		url  : 'includes/user/user_change_pass.php',
		success: function(userResponse){
			
			$('#passAlert').html(userResponse);

		}
	});
	
	event.preventDefault();
	console.log( $( this ).serialize() );
});
</script>
</html>