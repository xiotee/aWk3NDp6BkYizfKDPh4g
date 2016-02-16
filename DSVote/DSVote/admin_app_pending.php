<?php 
	
	include('includes/admin_init.php');
	include('includes/admin/check_admin_logged_in.php');

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
           
                   <h3 class="page-title">
                     Applications
                   </h3><br>

               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN EDITABLE TABLE widget-->
				<!--BEGIN PILLS NAV-->
				 
                <div class="bs-docs-example"> 
                    <ul class="nav nav-pills">
                        <li><a href="admin_app.php" title="View All Applicants">All</a></li>
						<li class="active" ><a>Pending</a></li>        
                    </ul>
                 </div>   
                <!--END PILLS NAV-->
			
             <div class="row-fluid">	 
			 
                 <div class="span12">
                     <!-- BEGIN EXAMPLE TABLE widget-->
                     <div class="widget black">
                         <div class="widget-title">
                           <h4><i class="icon-file-text"></i> &nbsp;Pending Applications </h4> 
                         </div>
                         <div class="widget-body">
						 
                             <div>
                                 
                                 <div class="space15"></div>
                                 <table class="table table-striped table-hover table-bordered" id="editable-sample">                                  
									 <thead>
										 <tr>
											<th>Application ID</th>
											<th>ID Number</th>
											<th>Full Name</th>
											<th>Position</th>
											<th>Application Status</th>
											<th>Date & Time</th>
											 <th aria-label="Info">More Info</th>
											 <th aria-label="Username">Approve</th>
											 <th aria-label="Username">Decline</th>
										 </tr>
                                     </thead>
                                     <tbody>
									 
										<?php
									 
											$appSql = mysql_query(" SELECT * FROM application WHERE app_status='Pending' AND isDelete='false' ORDER BY app_datetime DESC");
										
											while($app = mysql_fetch_assoc($appSql)){
											
												$appID = 	   $app['application_id'];
												$appUserID =   $app['user_id'];
												$appUserPos =  $app['position'];
												$appUserPhoto = $app['image'];
												$appStatus =   $app['app_status'];
												$appDateTime =  $app['app_datetime'];
												
												if($appStatus == 'Accepted'){
													$color = 'success';
												}else if($appStatus == 'Denied'){
													$color = 'important';
												}else{
													$color = 'warning';
												}
												
												$userSql = mysql_query("SELECT * FROM user WHERE user_id = '$appUserID' AND account_status='Active'");
												
												while($user = mysql_fetch_assoc($userSql)){
												
													$userId=       $user['user_id'];
													$userIdNum=    $user['id_num'];
													$userFname =   $user['fname'];
													$userLname =   $user['lname'];
													$userMid =     $user['minitial'];
													$userCourse =  $user['course'];
													$userYear =    $user['stud_year'];
													$fullName =    ("$userFname $userMid. $userLname");  
											
													echo("  
															<tr class=''>
																<td>$appID</td>
																<td>$userIdNum</td>
																<td style='text-transform: capitalize;'>$fullName</td>
																<td>$appUserPos</td>
																<td><center><span class='label label-$color label-mini' style='width: 55px'>$appStatus</span></center></td>
																<td>".date_format(date_create($appDateTime), 'F d, Y h:i A')."</td>
																<td><center><button class='btn btn-small btn-info' data-toggle='modal' data-target='#appInfoModal$userId' title='View Application'><i class='icon-search'></i> Info</button></center></td>
																<td><center><button class='btn btn-small btn-primary' data-toggle='modal' data-target='#appModal$userId' title='Approve Application'><i class='icon-ok'></i> Approve</button></center></td>
																<td><center><button class='btn btn-small btn-danger' data-toggle='modal' data-target='#decModal$userId'  title='Decline Application'><i class='icon-remove'></i> Decline</button></center></td>
															</tr>
														");
														
													include("includes/admin/application/info_userApp_modal.php");
													include("includes/admin/application/approve_app_modal.php");
													include("includes/admin/application/decline_app_modal.php");
														
												}
													
											}
										?>
                                    
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
                     <!-- END EXAMPLE TABLE widget-->
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
   <!-- BEGIN EDIT MODAL -->
		
</body>
<!-- END BODY -->
</html>