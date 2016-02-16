<?php 
	
	include('includes/admin_init.php');
	include('includes/admin/check_admin_logged_in.php');

	include('includes/admin/users/students/add_user.php');  //admin add user modal

?>


<!DOCTYPE html> 
<html lang="en">  
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
     
   <link rel="icon" href="images/logo/favicon.png" />
  
   <title>DS Voting System</title>
   
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   
   <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet" />
   <link href="assets/bootstrap/css/bootstrap-responsive.css" rel="stylesheet" />
   <link href="assets/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet" />
   <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="css/style.css" rel="stylesheet" />
   <link href="css/style-responsive.css" rel="stylesheet" />
   <link href="css/style-default.css" rel="stylesheet" id="style_color" />
   <link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />
   <link rel="stylesheet" href="assets/data-tables/DT_bootstrap.css" />

</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
   <!-- BEGIN HEADER -->
		<?php include('includes/header.php') ?>  
   <!-- END HEADER -->
   <!-- BEGIN CONTAINER -->
   <div id="container" class="row-fluid">
      <!-- BEGIN SIDEBAR -->
      <div class="sidebar-scroll">
          <div id="sidebar" class="nav-collapse collapse">

              <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
              <div class="navbar-inverse">
                  <form class="navbar-search visible-phone">
                      <input type="text" class="search-query" placeholder="Search" />
                  </form>
              </div>
              <!-- END RESPONSIVE QUICK SEARCH FORM -->
              <!-- BEGIN SIDEBAR MENU -->
					<?php include('includes/admin/sidebar_admin.php') ?>  
              <!-- END SIDEBAR MENU -->
          </div>
      </div>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->  
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                     Users
                   </h3><br>
            
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
			
			<!-- BEGIN BUTTON TAB -->
            <div class="bs-docs-example"> 
				
				<ul class="nav pull-left nav-pills">
                    <li class="active"><a>Students</a></li>
					<li ><a href="admin_users_admin.php" title="Admin Users">Administrators</a></li>
					<div class="space15"> </div>
                </ul>
            </div>
            <!--END BUTTON TAB-->

			
            <!-- BEGIN EDITABLE TABLE widget-->	
            <div class="row-fluid">	 
                <div class="span12">
				
					<!--check session if id number doesn't exists-->
						<?php include('includes/admin/users/students/reset_alert.php')?>
					<!--End-->
					
					<!--Reset user application/vote status-->
					<form method="POST" action="includes/admin/users/students/reset_user_avs.php">
                         <div class="row-fluid">
                            <div class="pull-left">
                                <div class="input-append">
									<label>Reset Vote Status</label>
                                    <input type="text" id="voteUserId" name="voteUserId" class="input input-small" placeholder="ID Number.." pattern="(?=.*\d).{8}" title="ID number must contain only 8 digits">
                                    <input type="submit" name="resetVoteStat" id="resetVoteStat" class="btn btn-danger" value="GO" />
                                 </div>
                            </div>
					 
							<div class="pull-right">
								<div class="input-append">
									<label>Reset Application Status</label>
                                    <input type="text" id="appUserId" name="appUserId" class="input input-small" placeholder="ID Number.." pattern="(?=.*\d).{8}" title="ID number must contain only 8 digits">
                                    <input type="submit" name="resetAppStat" id="resetAppStat" class="btn btn-primary" value="GO" />
                                </div>   
							 </div>
						</div>
                    </form>
					
					<!--Reset all users' application/vote status-->
					<div class="row-fluid">
                        <div class="pull-left">
							<div class="control-group">
								<div class="input-prepend">
									<button class='btn btn-danger' data-toggle='modal' data-target='#voteStatModal' title="Reset Users Vote Status">
										<i class="icon-undo"> </i> Reset All Vote Status 
									</button>
								</div>
								<?php include("includes/admin/users/students/reset_allVoteStat_modal.php")?>
							</div>
						</div>

						<div class="pull-right">
							<div class="control-group">
								<div class="input-prepend">
									<button class='btn btn-primary' data-toggle='modal' data-target='#appStatModal' title="Reset Users Application Status">
										<i class="icon-undo"> </i> Reset All Application Status 
									</button>
								</div>
								<?php include("includes/admin/users/students/reset_allAppStat_modal.php")?>
							</div>
						</div>
					</div>
					
                    <!-- BEGIN TABLE widget-->
                    <div class="widget black">
                        <div class="widget-title"> 
							<h4><i class="icon-user"> </i> &nbsp;Student Users</h4>
						</div>
                        <div class="widget-body">
                            <div>
								
								<!--check session if empty or not and display alert message after edit or delete-->
								<?php include('includes/admin/users/students/alert.php')?>
								<!--End-->
								
								<!-- BEGIN   MODAL -->
								<?php include('includes/admin/users/students/add_user_modal.php'); ?>
								<!-- END   MODAL-->
								
								<br></br>     
                                <table class="table table-striped table-hover table-bordered" id="editable-sample">
                                    <thead>
                                    <tr>
										<th>User ID</th>
                                        <th>ID Number</th>
                                        <th>Full Name</th>
                                        <th>Course & Year</th>
                                        <th>Contact #</th>
										<th>Email Address</th>
										<th>Vote Status</th>
										<th>Application Status</th>
										<th>Account Status</th>
                                        <th aria-label="Edit" >Edit User Info</th>
                                        <th aria-label="Delete" >Delete or Activate User</th>
                                    </tr>
                                    </thead>
                                    <tbody>
										<?php include("includes/admin/users/students/display_user.php"); ?>
                                    </tbody>
                                </table>
							</div>
                        </div>
                    </div>
                    <!-- END TABLE widget-->
                </div>
            </div>
            <!-- END EDITABLE TABLE widget-->
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->  
   </div>
   <!-- END CONTAINER -->

   <!-- BEGIN FOOTER -->
		<?php include('includes/footer.html') ?>
   <!-- END FOOTER -->

   <!-- BEGIN JAVASCRIPTS -->
   <!-- Load javascripts at bottom, this will reduce page load time -->
   <script src="js/jquery-1.8.3.min.js"></script>
   <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   <script src="js/jquery.blockui.js"></script>
   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="js/excanvas.js"></script>
   <script src="js/respond.js"></script>
   <![endif]-->
   <script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
   <script type="text/javascript" src="assets/data-tables/jquery.dataTables.js"></script>
   <script type="text/javascript" src="assets/data-tables/DT_bootstrap.js"></script>
   <script src="js/jquery.scrollTo.min.js"></script>


   <!--common script for all pages-->
   <script src="js/common-scripts.js"></script>

   <!--script for this page only-->
   <script src="js/editable-table.js"></script>

   <!-- END JAVASCRIPTS -->
   <script>
       jQuery(document).ready(function() {
           EditableTable.init();
       });
   </script>
   
   <script>
	$('#resetVoteStat').attr('disabled', 'disabled');
	$('#voteUserId').keyup(function() {

		if ($('#voteUserId').val() != '') {
			$('#resetVoteStat').removeAttr('disabled');
		} else {
			$('#resetVoteStat').attr('disabled', 'disabled');
		}
		
	});
   </script>
   
   <script>
	$('#resetAppStat').attr('disabled', 'disabled');
	$('#appUserId').keyup(function() {
		
		if ($('#appUserId').val() != '') {
			$('#resetAppStat').removeAttr('disabled');
		} else {
			$('#resetAppStat').attr('disabled', 'disabled');
		}
		
	});
   </script>
   
</body>
<!-- END BODY -->
</html>