
	<?php
		include("user_changePass_modal.php");
		
		if(isset($user_id)){
			
			$sql=	mysql_query("SELECT fname FROM user WHERE user_id='$user_id' AND account_status='Active'");
			$row=	mysql_fetch_assoc($sql);
			
			$userFname= $row['fname'];
		}
	?> 
	<div id="header" class="navbar navbar-inverse navbar-fixed-top">
       <!-- BEGIN TOP NAVIGATION BAR -->
		<div class="navbar-inner">
			<div class="container-fluid">

				<!-- BEGIN LOGO -->
				<a class="brand" href="user_ann.php">
                   <img src="images/logo/dsLogo.png" alt="Metro Lab" />
				</a>
				<!-- END LOGO -->
 
				<div class="top-nav ">
					<ul class="nav pull-left top-menu" >
                      
						<!-- BEGIN USER LOGIN DROPDOWN -->
						<li> <a href="user_ann.php">Home</a> </li>
                        <li> <a href="user_apply.php">Apply</a> </li>                         
						<li> <a href="user_vote.php">Vote</a> </li>						   
                        <li> <a href="user_results.php">Results</a> </li>
						<li> <a href="user_about_us.php">About</a> </li>
						<!-- END USER LOGIN DROPDOWN -->   
					</ul>
					
					<ul class="nav pull-right top-menu" >
                      
                       <!-- BEGIN USER LOGIN DROPDOWN -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<span class="username">Welcome, <?php echo $userFname?> !</span>
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu extended logout">
                               <li><a href="" data-toggle="modal" data-target="#uchangePassModal"><i class="icon-cog"></i> Change Password</a></li> 
                               <li><a href="includes/logout.php"><i class="icon-key"></i> Log Out</a></li>
							</ul>
						</li>
                       <!-- END USER LOGIN DROPDOWN -->
					</ul>
                   <!-- END TOP NAVIGATION MENU -->
				</div>
			</div>
		</div>
       <!-- END TOP NAVIGATION BAR -->
	</div>

	
    