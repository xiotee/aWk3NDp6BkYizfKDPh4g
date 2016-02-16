	<?php		
		$termSql = mysql_query("SELECT year_start FROM officer ORDER BY officer_id DESC LIMIT 1");
		$termCount = mysql_num_rows($termSql);
		$termRow = mysql_fetch_assoc($termSql);
		$yStart = $termRow['year_start'];
		
		$url=($termCount != 0)?"admin_officers.php?term=$yStart":"admin_officers.php";
		
		
		$resSql = mysql_query("SELECT term_start FROM candidate ORDER BY candidate_id DESC LIMIT 1");
		$resCount = mysql_num_rows($resSql);
		$resRow = mysql_fetch_assoc($resSql);
		$tStart = $resRow['term_start'];
		
		$resUrl=($resCount != 0)?"admin_results.php?resTerm=$tStart":"admin_results.php";

	?>
	
    <ul class="sidebar-menu">
		
		<!--Announcements-->
	    <li class="sub-menu">
            <a class="" href="admin_ann.php">
                <i class="icon-exclamation"></i>
                <span>Announcements</span>
            </a>
        </li>
		<li class="sub-menu">
            <a class="" href="admin_users_stud.php">
                <i class="icon-group"></i>
                <span>Users</span>
            </a>
        </li>
		<li class="sub-menu">
            <a href="admin_app.php" class="">
                <i class="icon-pencil"></i>
                <span>Applications</span>
            </a>
        </li>
		<li class="sub-menu">
            <a href="<?php echo $url?>" class="">
                <i class="icon-sitemap"></i>
                <span>Officers</span>
            </a>
        </li>
        <li class="sub-menu">
            <a class="" href="<?php echo $resUrl?>">
                <i class="icon-list"></i>
                <span>Results</span>
            </a>
        </li>		
		<li class="sub-menu">
            <a class="" href="admin_about_us.php">
                <i class="icon-home"></i>
                <span>About Us</span>
            </a>
        </li>
		<li class="sub-menu">
            <a class="" href="admin_activation.php">
                <i class="icon-power-off"></i>
                <span>Activation</span>
            </a>
        </li>
		<li class="sub-menu">
            <a class="" href="admin_viewlogs.php">
                <i class="icon-book"></i>
                <span>View Logs</span>
            </a>
        </li>
			   
	</ul>
