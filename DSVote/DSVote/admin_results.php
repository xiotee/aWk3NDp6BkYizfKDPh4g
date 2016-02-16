<?php 
	
	include('includes/admin_init.php');
	include('includes/admin/check_admin_logged_in.php');

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
   <link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
   <link href="assets/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet" />
   <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="css/style.css" rel="stylesheet" />
   <link href="css/style-responsive.css" rel="stylesheet" />
   <link href="css/style-default.css" rel="stylesheet" id="style_color" />
   <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
   <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
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
					
						<?php 
							$getTerm = ($_GET['resTerm'] == null)? "" : "".$_GET['resTerm']." - ".($_GET['resTerm']+1)."";
							
							echo " Results $getTerm";
						?> 

					</h3><br>
            
               </div>
            </div>
            <!-- END PAGE HEADER-->
			
			<div class="bs-docs-example">
				<ul class="nav nav-pills" >
					<li class="dropdown active">
						<a href="#" data-toggle="dropdown" role="button" id="drop5" class="dropdown-toggle">Select Term <b class="caret"> </b></a>
						<ul aria-labelledby="drop5" role="menu" class="dropdown-menu" id="menu2">
								
						<?php
							$resTerm = mysql_query("SELECT DISTINCT term_start, term_end FROM candidate WHERE isDelete='false' ORDER BY term_start DESC");
							$rCount=mysql_num_rows($resTerm);
										
							if($rCount != 0){
								while($rowTerm = mysql_fetch_array($resTerm)){
									$term_start = $rowTerm['term_start'];
									$term_end = $rowTerm['term_end'];
												
									echo"<li role='presentation'>
											<a href='admin_results.php?resTerm=$term_start' role='menuitem'>$term_start - $term_end</a>
										 </li>";
									}
							}else{
								echo"<li role='presentation'>No result</li>";
							}
										
						?>
									
						</ul>
					</li>
				<ul>
				
				<ul class="nav pull-right">
                    <li>
						
						<button class='btn btn-danger' data-toggle='modal' data-target='#delResModal<?php echo $_GET['resTerm']?>' title="Delete Result">
							<i class="icon-trash"> </i> Delete Result
						</button>
					</li>
					<?php include("includes/admin/results/delete_result_modal.php")?>
                </ul> 
			</div>
			
            <!-- BEGIN PAGE CONTENT--> 
			
            <div class="row-fluid">
                <div class="span12">
					<?php 
						$studSql = mysql_query("SELECT * FROM user WHERE account_status='Active'");
						$studCount = (mysql_num_rows($studSql) == 0)? 0 : mysql_num_rows($studSql);
						echo "<h3><font color='blue'> Total # of Students : <b>$studCount</b></font></h3>";
						
						$votersSql = mysql_query("SELECT * FROM user WHERE account_status='Active' AND vote_status='Voted'");
						$voterCount = (mysql_num_rows($votersSql) == 0)? 0 : mysql_num_rows($votersSql);
						echo "<h3><font color='blue'>Voters Turnout : <b>$voterCount</b></font></h3><br>";
						
						include("includes/admin/results/admin_display_results.php");
					
					?>
										 
               </div>
            </div>

							

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
   <script type="text/javascript" src="assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
   <script src="assets/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>

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

   <!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->
</html>