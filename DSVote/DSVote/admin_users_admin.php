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
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                     Users
                   </h3>
					<br>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
			
			<!-- BEGIN BUTTON TAB -->
            <div class="bs-docs-example"> 
                <ul class="nav nav-pills">
                    <li><a href="admin_users_stud.php" title="Student Users">Students</a></li>
					<li class="active"><a>Administrators</a></li>
                </ul>
            </div>   
            <!--END BUTTON TAB-->
			
            <!-- BEGIN EDITABLE TABLE widget-->	
            <div class="row-fluid">	 
                <div class="span12">
                    <!-- BEGIN TABLE widget-->
                    <div class="widget black">
                        <div class="widget-title"> 
							<h4><i class="icon-user"> </i> &nbsp;Admin Users</h4>
						</div>
                        <div class="widget-body">
                            <div>
								<!--check session if empty or not and display alert message after edit or delete-->
								<?php include('includes/admin/users/admin/alert.php')?>
								<!--End-->
								
								<!-- BEGIN Add and Edit MODAL -->
								<?php include('includes/admin/users/admin/add_admin_modal.php'); ?>
								<?php include ("includes/admin/users/admin/edit_admin_modal.php");?>
								<!-- END Add and Edit MODAL-->
	                            
                                <div class="space15"></div>
                                <table class="table table-striped table-hover table-bordered" id="editable-sample">
                                    <thead>
                                    <tr>
										<th>Admin ID</th>
                                        <th>Username</th>
                                        <th>Full Name</th>
										<th>Status</th>
                                        <th aria-label="Edit" ><center>Edit User Info</center></th>
                                        <th aria-label="Delete" ><center>Delete or Activate User</center></th>
                                    </tr>
                                    </thead>
                                    <tbody>
										<?php		 
											$adminsql = mysql_query(" SELECT * FROM admin WHERE admin_id!='$admin_id' ORDER BY username ASC");
																		
											if(mysql_num_rows($adminsql)>0){
																		 
												while($admin = mysql_fetch_assoc($adminsql)){
																			
													$adminID = $admin['admin_id'];
													$adminFname = $admin['fname'];
													$adminLname = $admin['lname'];
													$adminUname = $admin['username'];
													$adminPass = $admin['password'];
													$fullName = ("$adminFname $adminLname"); 
													$adminStatus = $admin['account_status'];
																			
													echo "<tr class=''>
																<td>$adminID</td>
																<td>$adminUname</td>
																<td style='text-transform: capitalize;'>$fullName</td>
																<td>$adminStatus</td>
																<td><center><button class='btn btn-small btn-primary' id='edit' data-toggle='modal' data-target='#editModal' data-id='$adminID' data-fname='$adminFname' data-lname='$adminLname' data-uname='$adminUname' title='Edit User'><i class='icon-pencil icon-white'></i> Edit</button></center></td>";
															
														if($adminStatus == "Active"){
															
															echo "<td><center><button class='btn btn-small btn-danger' id='delete$adminID' data-toggle='modal' data-target='#delModal$adminID' title='Delete User' ><i class='icon-remove icon-white'></i> Delete</button></center></td>";
															
														}else{
															
															echo "<td><center><button class='btn btn-small btn-success' id='activate$adminID' data-toggle='modal' data-target='#activate$adminID' title='Activate User' ><i class='icon-off icon-white' ></i> Activate</button></center></td>";
															
														}
																
															
													echo "</tr>"; 
													
													include ("includes/admin/users/admin/delete_admin_modal.php");
													include ("includes/admin/users/admin/activate_admin_modal.php");

												}
												
											}
											
											/*include ("includes/admin/users/admin/edit_admin_modal.php");*/
											
											
										?>	
										
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
   
   <!--BEGIN Edit Modal-->
   
   <!--END Edit Modal-->
   
   <script language="JavaScript" type="text/javascript">

	$(document).on( "click", "#edit", function() {
		var id = $(this).data('id');
		var fname = $(this).data('fname');
		var lname = $(this).data('lname');
		var username = $(this).data('uname');
		
		$("#editForm #id").val(id);
		$("#editForm #firstname").val(fname);
		$("#editForm #lastname").val(lname);
		$("#editForm #uname").val(username);
	});
	</script>

	
</body>
<!-- END BODY -->
</html>