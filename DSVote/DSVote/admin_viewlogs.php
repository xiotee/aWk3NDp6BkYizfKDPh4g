<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
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
                     View Logs
                   </h3><br>
            
               </div>
            </div>
            <!-- END PAGE HEADER-->
            
			<!-- BEGIN EDITABLE TABLE widget-->
            <div class="row-fluid">	 
			 
                <div class="span12">
                     
					 <!-- BEGIN EXAMPLE TABLE widget-->
                     <div class="widget black">
                        <div class="widget-title"> 
							<h4><i class="icon-tasks"></i> &nbsp;Logs </h4> 
						</div>
                        <div class="widget-body">
							<div>  
                                <div class="space15"></div>
                                <table class="table table-striped table-hover table-bordered" id="editable-sample">
                                    <thead>
										<tr>
											<th>Log ID</th>
											<th>Admin Name</th>
											<th>Student ID Number</th>
											<th>Action</th>
											<th>Date and Time</th> 
										</tr>
                                    </thead>
                                    <tbody>
										<?php
											$sql = mysql_query("SELECT l.log_id, l.admin_id, l.user_id, u.id_num, u.fname AS studFname, u.minitial, u.lname
																AS studLname, a.fname, a.lname, l.action, l.log_datetime
																FROM logs AS l
																LEFT JOIN admin AS a
																ON l.admin_id = a.admin_id
																LEFT JOIN user AS u
																ON l.user_id = u.user_id ORDER BY l.log_id DESC");
																
											while($logsql = mysql_fetch_assoc($sql)){
											
												$log_id = $logsql['log_id'];
												$log_adminId = $logsql['admin_id'];
												$log_studId = $logsql['user_id'];
												$log_act = $logsql['action'];
												$log_date = $logsql['log_datetime'];
												
												$studIdnum = $logsql['id_num'];
												$studFname = $logsql['studFname'];
												$studMid = $logsql['minitial'];
												$studLname = $logsql['studLname'];
												$adminLname = $logsql['lname'];
												$adminFname = $logsql['fname'];
												
												$log_stud= ($log_studId != NULL)? $studIdnum : "<i>None</i>";
												$log_admin= ($log_adminId!=NULL)? ("$adminFname $adminLname"): "<i>None</i>";
												
												$logAction= ($log_adminId == NULL && $log_studId!=NULL)? ("$studFname $studMid. $studLname $log_act") : 													    $log_act; 
												
												echo"<tr>
														<td>$log_id </td>
														<td>$log_admin</td>
														<td>$log_stud</td>
														<td>$logAction</td>
														<td>".date_format(date_create($log_date), 'F d, Y h:i A')."</td>
													 </tr>";
											
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
</body>
<!-- END BODY -->
</html>