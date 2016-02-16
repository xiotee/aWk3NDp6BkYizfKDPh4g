<html>
<!--Add User Button-->
<a href="#unModal19" class="btn btn-success" data-toggle="modal" data-target="#unModal19" title="Add User"><i class="icon-plus"> </i> Add User</a>

<!--BEGIN ADD USER MODAL-->											
<div class="modal fade" id="unModal19" tabindex="-1" role="dialog" aria-labelledby="unModal19" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="unmyModalLabel19">Add User</h4>
			</div>
			<div class="modal-body">
			
				<form method='POST' action='' class="form-horizontal" id="studentForm">
					
					<div id="alert2"> </div>
					
					<!--ID Number-->
					<div class="control-group">
                        <label class="control-label">ID Number</label>
                        <div class="controls">
							<input type="text" name="uIdNum" id="uIdNum" class="input-xlarge" pattern="(?=.*\d).{8}" title="ID number must contain only 8 digits" required > 
                        </div>
                    </div>

					<!--Password-->
					<div class="control-group">
                        <label class="control-label">Password</label>
                        <div class="controls">
                            <input type="password" name="password" id="password" class="input-xlarge" pattern=".{8,}" title="Password must contain at least 8 characters." required> 
                        </div>
                    </div>	
					
					<!--Last Name-->
					<div class="control-group">
                        <label class="control-label">Last Name</label>
                        <div class="controls">
                            <input type="text" name="lName" id="lName" style="text-transform: capitalize;" class="input-xlarge" pattern="[A-Za-z\s]{1,}" title="Last Name must not contain numeric characters" required> 
                        </div>
                    </div>
					
					<!--First Name-->
					<div class="control-group">
                        <label class="control-label">First Name</label>
                        <div class="controls">
                            <input type="text" name="fName" id="fName" style="text-transform: capitalize;" class="input-xlarge" pattern="[A-Za-z\s]{1,}" title="First Name must not contain numeric characters" required> 
                        </div>
                    </div>
					
					<!--Middle Initial-->
					<div class="control-group">
                        <label class="control-label">Middle Initial</label>
                        <div class="controls">
                           <input type="text" name="mInitial" id="mInitial" style="text-transform: capitalize;" class="input-xlarge" pattern="[A-Za-z]{1}" title="Middle Inital must contain only 1 character" required> 
                        </div>
                    </div>
					
					<!--Course-->
					<div class="control-group">
                        <label class="control-label">Course</label>
                        <div class="controls">
							<select type="text" name="course" id="course" class="input-xlarge" required>
								<option value="BSCS"> BSCS </option>
								<option value="BSIT"> BSIT </option>
							</select>
                        </div>
                    </div>
					
					<!--Student Year-->
					<div class="control-group">
                        <label class="control-label">Year</label> 
                        <div class="controls">
                            <input type="number" name="year" id="year" min="1" max="4" class="input-xlarge" required> 
                        </div>
                    </div>
					
					<!--Mobile Number-->
					<div class="control-group">
                        <label class="control-label">Mobile #</label>
                        <div class="controls">
                            <input type="text" name="mobile" id="mobile" pattern="[0-9]{11}" title="Must be 11 digits" class="input-xlarge"> 
                        </div>
                    </div>
					
					<!--Email Address-->
					<div class="control-group">
                        <label class="control-label">Email Address</label>
                        <div class="controls">
							<input type="email" name="email" id="email" class="input-xlarge"> 
                        </div>
                    </div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<input type="submit" class="btn btn-primary" name="Submit"  id="submitBtn" value="Submit">  		
			  
				</form>
			</div>
        </div>
    </div>
</div>

<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>

<script language="JavaScript" type="text/javascript">

	$( "#studentForm" ).on( "submit", function( event ) {
		
		var submitBtn = $('#submitBtn').val();
		var idNum = 	$('#uIdNum').val();
		var pass = 		$('#password').val();
		var fname = 	$('#fName').val();
		var lname = 	$('#lName').val();
		var midInit =	$('#mInitial').val();
		var course = 	$('#course').val();
		var year = 		$('#year').val();
		var mobile = 	$('#mobile').val();
		var email = 	$('#email').val();

		$.ajax({
			type : 'POST',
			data :{'Submit':submitBtn, 'uIdNum':idNum, 'password':pass, 'fName':fname, 'lName':lname, 'mInitial':midInit, 'course':course, 'year':year, 'mobile':mobile, 'email':email},
			url  : 'includes/admin/users/students/add_user.php',
			success: function(studData){
				
				if(studData > 0 ){
					
					$('#alert2').html("<div class=' alert alert-error' align='center'> ID number already exists! </div>");
				
				}else{
					
					$('#alert2').html("<div class=' alert alert-success' align='center'> User has been successfully added! </div>");
					setTimeout(function() { window.location=window.location;},1300);
				}
							
			}
		});
		
		event.preventDefault();
		console.log( $( this ).serialize() );
	});
	
</script>
</html>