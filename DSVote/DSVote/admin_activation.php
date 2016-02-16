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
   <link href="assets/bootstrap/css/bootstrap-responsive.css" rel="stylesheet" />
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
                     Activation
                   </h3><br>
             
               </div>
            </div>
            <!-- END PAGE HEADER-->

			<?php 
				include('includes/admin/activation/admin_act_application.php');
				include('includes/admin/activation/admin_act_votation.php');
				include('includes/admin/activation/admin_act_results.php');
				
				/*Application activation*/
				$application = mysql_query("SELECT act_status FROM activation WHERE act_type = 'Application' ORDER BY activate_id DESC LIMIT 1");
				
				if(mysql_num_rows($application) != 0){
					
					$app = mysql_fetch_assoc($application);

					$status = $app['act_status'];
			
				}
				
				
				/*Votation activation*/
				$votation = mysql_query("SELECT act_status FROM activation WHERE act_type = 'Votation' ORDER BY activate_id DESC LIMIT 1");
				
				if(mysql_num_rows($votation) != 0){
					
					$vote = mysql_fetch_assoc($votation);
					
					$status2 = $vote['act_status'];;
			
				}
				
				/*Results activation*/
				$results = mysql_query("SELECT act_status FROM activation WHERE act_type = 'Results' ORDER BY activate_id DESC LIMIT 1");
				
				if(mysql_num_rows($results) != 0){
					
					$res = mysql_fetch_assoc($results);
					
					$status3 = $res['act_status'];
			
				}
			?>
			
			<!--BEGIN ACTIVATION-->
            <div class="metro-nav">
				
				<div style="display: none" id="a_app" class="metro-nav-block nav-block-grey ">
                    <a data-toggle="modal" data-target="#appModal" title="Activate Application">
                        <i class="icon-pencil"></i>
                        <div class="status">Application</div>
                    </a>
                </div>			
				<div style="display: none" id="d_app" class="metro-nav-block nav-block-blue">
                    <a data-toggle="modal" data-target="#appModal1" title="Deactivate Application">
                        <i class="icon-pencil"></i>
                        <div class="status">Application</div>
                    </a>
                </div>
				
				<div style="display: none" id="a_vote" class="metro-nav-block nav-block-grey ">
                    <a href="#voteModal" data-toggle="modal" data-target="#voteModal" title="Activate Votation">
						<i class="icon-thumbs-up"></i>
                        <div class="status">Votation</div>
                    </a>
                </div>
				<div style="display: none" id="d_vote" class="metro-nav-block nav-block-blue ">
                    <a href="#voteModal1" data-toggle="modal" data-target="#voteModal1" title="Deactivate Votation">
                        <i class="icon-thumbs-up"></i>
                        <div class="status">Votation</div>
                    </a>
                </div>
				
				<div style="display: none" id="a_res" class="metro-nav-block nav-block-grey ">
                    <a href="#resModal" data-toggle="modal" data-target="#resModal" title="Activate Results">
                        <i class="icon-bar-chart"></i>
                        <div class="status">Results</div>
                    </a>
               </div>
				<div style="display: none" id="d_res" class="metro-nav-block nav-block-blue ">
                    <a href="#resModal1" data-toggle="modal" data-target="#resModal1" title="Deactivate Results">
                        <i class="icon-bar-chart"></i>
                        <div class="status">Results</div>
                    </a>
                </div>
					
			</div>
			<!--END ACTIVATION-->
             
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

   
   <!-- AJAX -->
    <script src="http://code.jquery.com/jquery-1.3.2.min.js"></script>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	
	<script>
		var stat = '<?php echo $status; ?>';
		var stat2 = '<?php echo $status2; ?>';
		var stat3 = '<?php echo $status3; ?>';

		$(document).ready(function(){
			
			if(stat == 'Activated'){
			
				$("#d_app").show();
			
			}else{
				
				$("#a_app").show();
			
			}
			
			if(stat2 == 'Activated'){
			
				$("#d_vote").show();
			
			}else{
				
				$("#a_vote").show();
			
			}

			if(stat3 == 'Activated'){
				
				$("#d_res").show();
			
			}else{
			
				$("#a_res").show();
			
			}		
		});
	</script>


   <!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->
</html>