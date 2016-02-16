<html>
<!--Add Admin Button-->
<a href="#addModal" class="btn btn-success" data-toggle="modal" data-target="#addModal" title="Add Admin User"><i class="icon-plus"> </i> Add Administrator</a>

<!--BEGIN ADD USER MODAL-->											
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="addModal">Add Administrator</h4>
			</div>
			<div class="modal-body">
			
				<form method='POST' action='' class="form-horizontal" id="adminForm">	
					
					<div id="alert1"> </div>
					
					<!--First Name-->
					<div class="control-group">
                        <label class="control-label">First Name</label>
                        <div class="controls">
                            <input name="fName" type="text" style="text-transform: capitalize;" id="fName" pattern="[A-Za-z\s]{1,}" title="First Name must not contain numeric characters" class="input-xlarge" required> 
                        </div>
                    </div>
					
					<!--Last Name-->
					<div class="control-group">
                        <label class="control-label">Last Name</label>
                        <div class="controls">
                            <input type="text" name="lName" style="text-transform: capitalize;" id="lName" class="input-xlarge" pattern="[A-Za-z\s]{1,}" title="Last Name must not contain numeric characters" required> 
                        </div>
                    </div>
					
					<!--Username-->
					<div class="control-group">
                        <label class="control-label">Username</label>
                        <div class="controls">
							<input type="text" name="uname" class="input-xlarge" id="uName" required > 
                        </div>
                    </div>

					<!--Password-->
					<div class="control-group">
                        <label class="control-label">Password</label>
                        <div class="controls">
                            <input type="password" name="password" class="input-xlarge" id="password" pattern=".{8,}" title="Password must contain at least 8 characters." required> 
                        </div>
                    </div>
			
					
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<input type="submit" class="btn btn-primary" name="Submit" id="addUser"  value="Submit">  		
			  
				</form>
			</div>
        </div>
    </div>
</div>

<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>

<script language="JavaScript" type="text/javascript">

$( "#adminForm" ).on( "submit", function( event ) {
	var submitBtn = $('#addUser').val();
	var fname = $('#fName').val();
	var lname = $('#lName').val();
	var username = $('#uName').val();
	var adminPass = $('#password').val();
	
	
	$.ajax({
		type : 'POST',
		data :{'submit':submitBtn, 'fName':fname, 'lName':lname, 'uname':username, 'password':adminPass},
		url  : 'includes/admin/users/admin/add_admin.php',
		success: function(adminData){
			if(adminData > 0 ){
				$('#alert1').html("<div class=' alert alert-error' align='center'> Username already exists! </div>");
			}else{
				
				$('#alert1').html("<div class=' alert alert-success' align='center'> User has been successfully added! </div>");
				setTimeout(function() { window.location=window.location;},1200);
			}
						
		}
	});
	
event.preventDefault();
  console.log( $( this ).serialize() );
});
</script>
</html>