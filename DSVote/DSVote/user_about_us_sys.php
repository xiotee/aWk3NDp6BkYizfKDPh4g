<?php
	include('includes/user/check_user_logged_in.php');
	include('includes/admin_init.php');
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
		<?php include('includes/user_header.php') ?>  
    <!-- END HEADER -->
    <!-- BEGIN CONTAINER -->
    <div id="container" class="row-fluid">
      <!-- BEGIN SIDEBAR -->
 
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->  
      <div id="user-content">
        <!-- BEGIN PAGE CONTAINER-->
        <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                   <h3 class="page-title">
                     About Us
                   </h3><br>
               </div>
            </div>
            <!-- END PAGE HEADER-->
			
			<!--BEGIN PILLS NAV--> 
            <div class="bs-docs-example"> 
                 <ul class="nav nav-pills">
                    <li><a href="user_about_us.php">History</a></li>
					<li class="dropdown ">
                        <a href="" data-toggle="dropdown" role="button" id="drop5" class="dropdown-toggle">Officers<b class="caret"></b></a>
                        <ul aria-labelledby="drop5" role="menu" class="dropdown-menu" id="menu2">
							<?php
								$term = mysql_query("SELECT DISTINCT year_start, year_end FROM officer ORDER BY year_start DESC");
								$tCount=mysql_num_rows($term);
								
								if($tCount != 0){
									while($rowTerm = mysql_fetch_array($term)){
										$start = $rowTerm['year_start'];
										$end = $rowTerm['year_end'];
									
										echo"<li role='presentation'>
												<a href='user_about_us_off.php?term=$start' role='menuitem'>$start - $end</a>
											</li>";
									}
								}else{
									echo"<li role='presentation'> No officers added </li>";
								}								
							?> 
                        </ul>
					</li>	
					<li class="active"><a href="user_about_us_sys.php">System</a></li>
                </ul>
            </div>   
            <!--END PILLS NAV-->
			 	 
			<div class="row-fluid">	 
				<img src="images/logo/aboutDSVS.png" alt="">
				
				<h3> Developers : Team Zeus </h3>
			 
                <div class="widget-body">

					<div class="row-fluid">
                        <div class="span6">
                            <div class="row-fluid about-us">
                                <div class="span4">
                                    <img src="images/defaultimg.png" alt="">
                                </div>
                                <div class="span8">
                                    <div class="info terques">
                                        <h1>Jeremy Yutiu</h1>
                                        <p>Project Leader</p>
                                    </div>
								</div>
                                <div class="space10"></div>
                            </div>
                        </div>
								 
                        <div class="span6">
                            <div class="row-fluid about-us">
                                <div class="span4">
                                    <img src="images/defaultimg.png" alt="">
                                </div>
                                <div class="span8">
                                    <div class="info terques">
                                        <h1>Jeremy Solera</h1>
                                        <p>Asst. Project Leader</p>
                                    </div>
								</div>
                                <div class="space10"></div>
                            </div>
                        </div>
					</div>
							
					<div class="row-fluid">              
						<div class="span6">
							<div class="row-fluid about-us">
								<div class="span4">
									<img src="images/defaultimg.png" alt="">
								</div>
								<div class="span8">
									<div class="info light-blue">
										<h1>May Lanie Abadiez</h1>
										<p> Configurations Manager</p>
										<p> & </p> 
										<p>Librarian</p>                                                   
									</div>
								</div>
								<div class="space20"></div>
								<div class="space10"></div>
							</div>
						</div>
								 
						<div class="span6">
							<div class="row-fluid about-us">
								<div class="span4">
									<img src="images/defaultimg.png" alt="">
								</div>
								<div class="span8">
									<div class="info light-blue">
										<h1>Trishia Mae Gumboc</h1>
										<p>Recorder</p>
									</div>
								</div>
								<div class="space10"></div>
							</div>
						</div>
					</div>
					
				</div>
			</div>				
		</div>
		<!-- END PAGE CONTAINER-->
	  </div>
	  <!-- END PAGE -->  
    </div>
	<!-- END CONTAINER -->
    
    </div>
    
   </div>
   

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