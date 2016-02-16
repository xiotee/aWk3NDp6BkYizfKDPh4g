
<?php
date_default_timezone_set('Asia/Manila');
//header("refresh: 1;url=logout.php");

error_reporting(0);

// error_reporting(E_ALL);
// ini_set('display_errors', '1');



include ('database/connect.php');

session_start(); //session start

//ob_start();
$username = $_SESSION['username'];
$admin_id = $_SESSION['admin_id'];
$user_id=$_SESSION['user_id']; 
$cur_date = date('Y-m-d');
$cur_time = date('g:i:s a');

$timestamp = date('Y-m-d g:i:s a');

$cur_year = date('Y');
$nxt_year = $cur_year + 1;


?>