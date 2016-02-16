<?php
	
	include('includes/admin_init.php');
	include('includes/admin/check_admin_logged_in.php');

	if(isset($_GET['add-success']))
	{
	  header( "refresh:1;url=admin_ann.php" );
	}
	
	$cur_year = $_GET['term'];
	$nxt_year = $cur_year +1;
		 
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
						$getTerm = ($_GET['term'] == null)? "" : "".$_GET['term']." - ".($_GET['term']+1)."";
						
						echo " Datalogics Society Officers $getTerm";
					?> 
                   </h3>
				   <br>
            
               </div>
            </div>
            <!-- END PAGE HEADER-->
            
			<!-- BEGIN EDITABLE TABLE widget-->
			<div class="bs-docs-example">
                <ul class="nav nav-pills">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" role="button" id="drop5" class="dropdown-toggle">Select Term <b class="caret"> </b></a>
                        <ul aria-labelledby="drop5" role="menu" class="dropdown-menu" id="menu2">
						
							<?php
								$term = mysql_query("SELECT DISTINCT year_start, year_end FROM officer ORDER BY year_start DESC");
								$tCount=mysql_num_rows($term);
								
								if($tCount != 0){
									while($rowTerm = mysql_fetch_array($term)){
										$start = $rowTerm['year_start'];
										$end = $rowTerm['year_end'];
										
										echo"<li role='presentation'>
												<a href='admin_officers.php?term=$start' role='menuitem'>$start - $end</a>
											 </li>";
									}
								}else{
									echo"<li role='presentation'>No term added</li>";
								}
								
							?>
							
                        </ul>
                    </li>
					<li lass="span2"> &nbsp;&nbsp;</li>
					
					<li class="active">
						<!--New Term Form-->
						<a  href="javascript:;" data-original-title="Add New Term" data-placement="bottom" data-html="true" rel="popover" class="popovers"
						    data-content="
						      <form method='POST' action='includes/admin/officers/new_term.php' id='termForm' class='text-center'>
								 <div id='termAlert'></div>
							     <input type='text' name='yStart' class='input-block-level' placeholder='Year Start…' pattern='[0-9]{4}' id='start' onkeyup='populate()' required/>
								 <input type='number' name='yEnd' class='input-block-level' placeholder='Year End…' id='end' readonly />
								 <button type='submit' name='submitTerm' id='submitTerm' class='btn btn-primary btn-block'>Submit</button>
							  </form>"> 
							Add New Term 
						</a>
					</li>
                 </ul>
            </div>
			

					
            <div class="row-fluid">	
				<div class="widget-body">
					
					<?php
						
						/*display alert regarding image file type and term*/
						include("includes/admin/officers/alerts.php");
						
						/*display officers*/
						if($termCount != 0){
							include("includes/admin/officers/display_officers.php");
						}else{
							echo "<center><h3><b> No Officers Added </b></h3></center>";
						}
						
					?>
					
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
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap-fileupload.js"></script>
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
		function populate() {
			document.getElementById('end').value = parseInt(document.getElementById('start').value)+1;
		}
	</script>

</body>
<!-- END BODY -->
</html>