<?php

	$sql=	"SELECT announcement_id, title, content, ann_date FROM announcement WHERE isDelete='false' ORDER BY ann_date DESC ";
	$query=	mysql_query($sql, $conn);
	$count= mysql_num_rows($query); 
							
	if($count==0){
			
		echo "<center><h3><b> No Announcement(s) </b></h3></center>";
		
	}else{
	
		while($row= mysql_fetch_array($query))
		{
			$ann_id=    $row['announcement_id'];
			$title= 	$row['title'];
			$content=	$row['content'];
			$date=		date_create($row['ann_date']);
									
			echo "<div class='ellipsis alert alert-block alert-info fade in'>
					<div class ='close'>
						<a class='btn' data-toggle='modal' data-target='#edModal$ann_id' title='Edit Announcement'><i class='icon-pencil'></i></a>
						<a class='btn' data-toggle='modal' data-target='#delModal$ann_id' title='Delete Announcement'>x</a>
					</div>";
						 
					echo "<h5> ".date_format($date, 'F d, Y')." </h5>
						  <h3 style='text-transform: capitalize;'> $title </h3>
								 
						  <label style='text-transform: capitalize;'> ".nl2br($content)." <label>";
												  
			echo '</div>';
														
			include ("includes/admin/announcements/admin_delete_ann_modal.html");		
									
			include ("includes/admin/announcements/admin_edit_ann_modal.php");
		}
	}
?>  