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
	<?php 
		include('includes/user_header.php'); 
	?>
   <!-- END HEADER -->
   <!-- BEGIN CONTAINER -->
   <div id="container" class="row-fluid">
      <!-- BEGIN PAGE -->  
      <div id="user-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
			 
                   <h3 class="page-title ">
                     Vote
                   </h3><br>
        
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
			
			
            <div class="row-fluid">
                <div class="span12">
					
					
					<?php
						$voteSql=mysql_query("SELECT act_status FROM activation WHERE act_type = 'Votation' ORDER BY activate_id DESC LIMIT 1");
						$vote = mysql_fetch_assoc($voteSql);
						$vote_status= $vote['act_status'];
										
						if(mysql_num_rows($voteSql) !=0 ){
											
							if(strcasecmp($vote_status, "Activated") == 0){
									
								include("includes/user/vote/user_vote_form.php");
									
							}else{
								echo "<br><h4><b><font color='green'> Information</font> </b></h4>";
								echo "<label> Votation is not yet available. </label>";
												
							}
											
						}else{
							echo "<br><h4><b><font color='green'> Information</font> </b></h4>";
							echo "<label> Votation is not yet available. </label>";
						}
										
					?>
					
				</div>
            </div>
       
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
	<script type="text/javascript" src="assets/jquery-slimscroll/jquery-ui-1.9.2.custom.js"></script>
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
	<script src="js/delAnn.js"></script>
   


	<!--common script for all pages-->
	<script src="js/common-scripts.js"></script>

	<!--script for this page only-->

	<script src="js/easy-pie-chart.js"></script>
	<script src="js/sparkline-chart.js"></script>
	<script src="js/home-page-calender.js"></script>
	<script src="js/home-chartjs.js"></script>
	
	
	<script>
		function confirmation(){
			
		  var con = confirm("Submit votes? (Once you click ok, you can no longer change your choices.)?");
		  
		  if(con == true){
			alert("You have successfully voted. Thank you for voting!");
			return true;
		  }else{
			alert("Submission of vote has been cancelled!");
			return false;
		  }
		  
		}
	</script>   
   
	<script type="text/javascript" language="javascript">

		function limitcheck(ch, limit) 
		{
			var elem, i = 0, total=0, ctr = limit, check = ch.form;
			
			while (elem = check.elements[i++])
			{
				
				if (elem.className == 'checkbox' && elem.checked){
					total+=1;
				}
				
				if (total > ctr)
				{
					return false;
				}
			}

			return true;
		}

	</script>
	<!-- END JAVASCRIPTS -->
	
</body>
<!-- END BODY -->
</html>