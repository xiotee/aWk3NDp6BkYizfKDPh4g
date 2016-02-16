<?php 

	include('includes/admin_init.php');
	include('includes/admin/check_admin_logged_in.php');

	//include('includes/admin/announcements/admin_add_ann.php');	

?>

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
   <meta content="Mosaddek" name="author" />
   
   <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet" />
   <link href="assets/bootstrap/css/bootstrap-responsive.css" rel="stylesheet" />
   <link href="assets/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet" />
   <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="css/style.css" rel="stylesheet" />
   <link href="css/style-responsive.css" rel="stylesheet" />
   <link href="css/style-default.css" rel="stylesheet" id="style_color" />
   <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
   <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
   <link href="css/annstyle.css" rel="stylesheet"/>
   
   
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
                     Announcements
                   </h3>
				   <br>
				   
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
				
				<!--display notification after editing or deleting announcement-->
				<?php include ("includes/admin/announcements/notification.php");?>
				
				<!-- BEGIN   MODAL -->
				<a class="btn" data-toggle="modal" data-target="#addModal" title="Add Announcement"><i class="icon-plus"> </i></a>
								
				<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModal" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">											  
								<h4 class="modal-title" id="addmyModalLabel">Add an Announcement</h4>
							</div>
							<div class="modal-body">
							
								<form method='POST' action='includes/admin/announcements/admin_add_ann.php' class="form-horizontal" >
									
									<div class="control-group">	
										<label  style="float: right; margin-top: 5px; margin-bottom:10px">
											<?php
												echo " ".date_format(date_create($timestamp), 'F d, Y')." &nbsp; ".date ('h:i A',strtotime($timestamp))." ";
											?>
										</label> 
									</div>
									
									<div class="control-group">
										<label class="control-label">Title</label>
										<div class="controls">
											<input type="text" name="title" style="text-transform: capitalize" class="input-xlarge" required /> 
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Content</label>
										<div class="controls">
											<textarea name="content" class="input-xlarge" rows="10" style="text-transform: capitalize"  required></textarea>
										</div>
									</div>
										 
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								<input type="submit" class="btn btn-primary" name="Submit"  value="Submit">  		
									
								</form>
							</div>
								
						
									
						</div>
					</div>
				</div>
				<!-- END   MODAL-->			
            </div>

            <div class="row-fluid">
			
                 <div class="span12">
						
					<div class="widget-body">
						
						
						
						<!-- BEGIN DISPLAY NOTIFICATION PORTLET-->
						<div id="paging_container">
							<div id="content">
								<div class="content">
									
									<!--Display announcements-->
									<?php include ("includes/admin/announcements/admin_display_ann.php");?>
								
								</div>
							</div>
							<div class="page_navigation"></div>
						<!-- END DISPLAY NOTIFICATION PORTLET-->
					  	</div>
			
					</div>
				</div>
            </div>

			<!--BEGIN PAGINATION-->
			<!--<div id='page_navigation'></div> 
			<div class="pagination pagination-centered">
                <ul>
                    <li><a href="#"><<</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">>></a></li>
                </ul>
            </div>-->
            <!-- END PAGE CONTENT-->         
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
   <script type="text/javascript" src="assets/jquery-slimscroll/jquery-ui-1.9.2.custom.min.js"></script>
   <script type="text/javascript" src="assets/jquery-slimscroll/jquery.slimscroll.js"></script>
   <script src="assets/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
   <script src="assets/bootstrap/js/bootstrap.js"></script>

   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="js/excanvas.js"></script>
   <script src="js/respond.js"></script>
   <![endif]-->

   <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js" type="text/javascript"></script>
   <script src="js/jquery.sparkline.js" type="text/javascript"></script>
   <script src="assets/chart-master/Chart.js"></script>
   <script src="js/jquery.scrollTo.min.js"></script>

   <!--common script for all pages-->
   <script src="js/common-scripts.js"></script>

   <!--script for this page only-->

   <script src="js/easy-pie-chart.js"></script>
   <script src="js/sparkline-chart.js"></script>
   <script src="js/home-page-calender.js"></script>
   <script src="js/home-chartjs.js"></script> 
   <script src="js/annjquery.js"></script>  
   <!--<script src="js/annjpaginate.js"></script>  
   <script src="js/annscript.js"></script>-->
   <script type="text/javascript" src="js/jquery.pajinate.js"></script>
		
		<script type="text/javascript">
			$(document).ready(function(){
				$('#paging_container').pajinate();
			});
		</script>
   
   <!-- END JAVASCRIPTS -->  
</body>
<!-- END BODY -->
</html>