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
                  
                   <h3 class="page-title">
                     Apply
                   </h3>
            
               </div>
            </div>
            <!-- END PAGE HEADER-->
			
			<!--BEGIN PILLS NAV--> 
            <div class="bs-docs-example"> 
                 <ul class="nav nav-pills">
                    <li><a href="user_apply.php">Application Form</a></li>
					<li class="active"><a href="user_apply_pos.php">Position Description</a></li> 
					
              </ul>

                </ul>
            </div>   
            <!--END PILLS NAV-->
	
	<!-- CONTENT -->
	<h4>SOURCE: Datalogics Society Article VIII - Duties and Rights of the Officers</h4>
	
	<br>
	<h3><b>President</b></h3>
	<ul>
		<li>To call and preside over all meetings and to prepare agenda for such.</li>
		<li>To supervise the activities and affairs of the organization.</li>
		<li>To appoint people into office in case of vacancies.</li>
		<li>To call special meetings.</li>
		<li>To delegate powers, duties and functions as he or she may see necessary.</li>
		<li>To represent the organization in the Arts and Sciences League. This function may be delegated from time to time to any member temporarily.</li>
	</ul>

	<br>	
	<h3><b>Vice-President for Internal Affairs</b></h3>
		<ul>
			<li>To be the coordinating officer for the activities held within the campus.</li>
			<li>To reserve places or venues of activities held inside the campus.</li>
			<li>To propose monthly activities for the organization related to the intellectual, physical, and spiritual aspects.</li>
			<li>To coordinate with the Secretary in carrying out all activities and affairs proposed by the former.</li>
			<li>To assume all the duties and responsibilities of the President in the event of vacancy in such office.</li>
		</ul>
			
	<br>		
	<h3><b>Vice-President for External Affairs</b></h3>
		<ul>
			<li>To be the coordinating officer for the activities held outside the campus.</li>
			<li>To reserve places or venues of such activities held outside the campus.</li>
			<li>To propose monthly activities for the organization related to the socio-cultural, community extension and waste management aspects.</li>
			<li>To coordinate with the Liaison Officers in carrying out all activities and affairs proposed by the former.</li>
			<li>To assume all the duties and responsibilities of the President in the event of a vacancy in such office if the Vice-President for Internal Affairs is absent.</li>
		</ul>
		
	<br>	
	<h3><b>Vice-President for Finance</b></h3>
		<ul>
			<li>Together with the President, has possession and control of the funds of the organization and is accountable for it.</li>
			<li>To collect fees and contributions of students from the Treasurers.</li>
			<li>To disburse funds with the recommendation of the President and the approval of the Executive Committee.</li>
			<li>To propose monthly activities related to the economic aspect.</li>
			<li>To make a monthly financial report for the members.</li>
			<li>To assume all the duties and responsibilities of the President in the event of a vacancy in such office if the Vice-President for Internal Affairs and Vice-President for External Affairs are absent.</li>
		</ul>
		
	<br>
	<h3><b>Vice-President for Information</b></h3>
		<ul>
			<li>To propose and recommend activities that will increase the members’ knowledge of topics related to the Computing Fields.</li>
			<li>To take responsibility in fulfilling such activities.</li>
			<li>To inform the Block Representatives and Block Treasurer of the upcoming activities or meetings of the organization.</li>
			<li>To assume all the duties and responsibilities of the President in the event of a vacancy in such office if the Vice-President for Internal Affairs, Vice-President for External Affairs, and Vice-President for Finance are absent.</li>
		</ul>
		
	<br>
	<h3><b>Assistant Vice-President for Internal Affairs</b></h3>
		<ul>
			<li>To assist the Vice-President for Internal Affairs in coordinating activities held within the campus and in fulfilling the latter’s duties.</li>
			<li>To help propose monthly activities for the organization related to the intellectual, physical, and spiritual aspects.</li>
			<li>To regularly check on and coordinate with the Secretaries so that the activities and affairs proposed by the Vice-President for Internal Affairs will be carried out.</li>
			<li>To assume all the duties and responsibilities of the Vice-President for Internal Affairs in the event of a vacancy in such office.</li>
		</ul>
		
	<br>
	<h3><b>Assistant Vice-President for External Affairs</b></h3>
		<ul>
			<li>To assist the Vice-President for External Affairs in coordinating activities held outside the campus and in fulfilling the latter’s duties.</li>
			<li>To help propose monthly activities for the organization related to the socio-cultural and community extension aspects.</li>
			<li>To regularly check on and coordinate with the Liaison Officers so that the activities and affairs proposed by the Vice-President for External Affairs will be carried out.</li>
			<li>To assume all the duties and responsibilities of the Vice-President for External Affairs in the event of a vacancy in such office.</li>
		</ul>
		
	<br>
	<h3><b>Assistant Vice-President for Finance</b></h3>
		<ul>
			<li>To assist the Vice-President for Finance in fulfilling his/her duties.</li>
			<li>To help propose monthly activities for the organization related to the economic aspect.</li>
			<li>To regularly check on and coordinate with the Treasurers so that the activities and affairs proposed by the Vice-President for Finance will be carried out.</li>
			<li>To conduct examination and audit of all the financial reports.</li>
			<li>To assume all the duties and responsibilities of the Vice-President for Finance in the event of a vacancy in such office.</li>
		</ul>

	<br>	
	<h3><b>Assistant Vice-President for Information</b></h3>
		<ul>
			<li>To assist the Vice-President for Information in fulfilling his/her duties.</li>
			<li>To help propose and recommend activities that will increase the members’ knowledge of topics related to the Bachelor of Science in Computer Science and Bachelor of Science in Information Technology.</li>
			<li>To assume all the duties and responsibilities of the Vice-President for Information in the event of a vacancy in such office.</li>
		</ul>
		
	<br>		
	<h3><b>Secretary</b></h3>
		<ul>
			<li>To keep the records of the organization.</li>
			<li>To take minutes of every meeting.</li>
			<li>To comply the necessary requirements and secure such permits from the appropriate offices.</li>
			<li>To keep records on the attendance of members in meetings and documentation of activities.</li>
			<li>To prepare the needed correspondence when the need arises.</li>
		</ul>
		
	<br>	
	<h3><b>Liaison Officer</b></h3>
		<ul>
			<li>To coordinate with out-of-campus persons and organizations regarding the organization’s activities and its promotion.</li>
			<li>To take charge and coordinate with the Vice-President for Finance and Treasurers in the purchasing of prizes, tokens, and other necessities needed for an activity.</li>
		</ul>
		
	<br>
	<h3><b>Treasurer</b></h3>
		<ul>
			<li>To collect fees and contributions from the members of the organization and be accountable for it until he or she turns it over to the Vice-President of Finance.</li>
			<li>To keep the financial records of the members of the organization.</li>
		</ul>
		
	<br>
	<h3><b>Public Relations Officer</b></h3>
		<ul>
			<li>To publicize activities and achievements of the organization.</li>
			<li>To coordinate with campus persons and other organizations regarding the organization’s activities and its promotion.</li>
			<li>To regularly update the organization’s social media platforms and bulletin board for information and announcement to the members.</li>
			<li>To be responsible of the documentations of any activities initiated by the organization.</li>
		</ul>
	<br>
	<br>
	
	<!-- END CONTENT -->
 
 
 
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