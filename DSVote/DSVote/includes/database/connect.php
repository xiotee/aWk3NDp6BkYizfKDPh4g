<?php
	$connect_error='<h1><center>Sorry, there is a connection problem.</center></h1>';
	$conn=mysql_connect('localhost','root','') or die($connect_error);
	mysql_select_db('dsvs') or die($connect_error);

?>