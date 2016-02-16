<?php
	include("../../admin_init.php");
	
	if(isset($_POST['submitTerm'])){
		
		$position = array('President','Vice President for Internal Affairs','Asst. Vice President for Internal Affairs','Secretary 1', 'Secretary 2','Vice President for External Affairs','Asst. Vice President for External Affairs','Liason 1', 'Liason 2', 'Vice President for Finance','Asst. Vice President for Finance','Treasurer 1', 'Treasurer 2','Vice President for Information','Asst. Vice President for Information','Public Relations Officer 1', 'Public Relations Officer 2');
		
		$termStart = $_POST['yStart'];
		$termEnd = 	 $_POST['yEnd'];
		
		$term = mysql_query("SELECT DISTINCT year_start FROM officer WHERE year_start='$termStart'");
		$termCnt = mysql_num_rows($term);
		$getTerm= mysql_fetch_assoc($term);
		$start = $getTerm['year_start'];
		
		if($termCnt > 0){
			$_SESSION['count']= $termCnt;
			
		}else{
			
			foreach($position as $pos){
				mysql_query("INSERT INTO officer(position, year_start, year_end) VALUES('$pos', '$termStart', '$termEnd')");
			}
			
			$_SESSION['count']=0;
		}

		$_SESSION['term']= $start;
		header("Location: ../../../admin_officers.php?term=$termStart");
		
	}


?>